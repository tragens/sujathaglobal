<?php

namespace App\Controllers;

    /**
     * Parameter for sesseion status logout.
     *
     * @param self logout     $1
     * @param logout by login $2
     * @param system logout   $3
     *
     */

class Login extends BaseController
{
    protected $db;
    // protected $sitesettingsModel;
    protected $systemlogsModel;
    // protected $sidebarModel;
    protected $userModel;
    protected $sessionModel;
    protected $deviceType;
    protected $deviceIp;
    protected $deviceOs;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // $this->sitesettingsModel = service('sitesettingsModel');
        // $this->sidebarModel = service('sidebarModel');
        $this->userModel = service('userModel');
        $this->sessionModel = service('sessionModel');
        $this->systemlogsModel = service('systemlogsModel');
        
        // Capture the device-related information
        $deviceInfo = $this->getDeviceInfo();
        $this->deviceType = $deviceInfo['deviceType'];
        $this->deviceIp = $deviceInfo['deviceIp'];
        $this->deviceOs = $deviceInfo['deviceOs'];
    }

    public function index()
    {
        // helper(['form', 'url']);
        // $data['site'] = $this->sitesettingsModel->first();
        return view('admin/login');

    }


    public function auth($auto = null)
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Start database transaction
        $this->db->transBegin();

        try {
            // Retrieve user data based on username
            $user = $this->userModel->where(['username' => $username, 'status' => 1])->first();

            if ($user) {
                // Check if the account is locked (failed 3 times)
                if ($user['failed_attempts'] >= 3 && strtotime($user['last_failed_login_at']) > time() - 1800) {
                    // Account is locked for 30 minutes
                    $this->systemlogsModel->insert(['activityType' => '3', 'details' =>'Login Failed after 3 attempt since '.$user['last_failed_login_at'].' for username: '.$username, 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);
                    // Commit the transaction
                    $this->db->transCommit();

                    $session->setFlashdata('msg', 'Your account is temporarily locked. Please try again after 30 minutes.');
                    return redirect()->to(base_url('login'));
                }

                // Validate password
                if (password_verify($password, $user['password'])) {
                    // Reset failed login attempts on successful login
                    $this->userModel->update($user['id'], ['failed_attempts' => 0, 'last_failed_login_at' => null]);

                    // Generate a new unique session ID
                    $currentSessionId = bin2hex(random_bytes(32)); // Secure session ID generation

                    // Regenerate session ID to avoid session fixation
                    session_regenerate_id(true);

                    // Set session data
                    $sessionData = [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'current_session_id' => $currentSessionId,
                        'logged_in' => TRUE
                    ];
                    $session->set($sessionData);

                    // Handle previous sessions
                    if (!empty($user['session_id']) && $user['session_id'] !== $currentSessionId) {
                        $this->userModel->update($user['id'], ['session_id' => null, 'lastActivity'=> null]);

                        $sesDetails = $this->sessionModel->where('sessionId', $user['session_id'])->first();
                        if ($sesDetails) {
                        $logDetails = "Login successful. However, a ".$sesDetails['computerType']." device running ".$sesDetails['computerOs']." OS with the IP address ".$sesDetails['computerIp']." was also logged in and forced to log out.";

                            $this->sessionModel->where('sessionId', $user['session_id'])->set([
                                'sessionEndcomputerType' => $this->deviceType,
                                'sessionEndcomputerIp' => $this->deviceIp,
                                'sessionEndcomputerOs' => $this->deviceOs,
                                'sessionEndtype' => 2
                            ])->update();
                        }
                    }

                    // Update the user’s session ID in the database
                    $this->userModel->update($user['id'], ['session_id' => $currentSessionId, 'lastActivity'=> date('Y-m-d H:i:s', time())]);

                    // Log session data in the session model
                    $this->sessionModel->insert([
                        'userId' => $user['id'],
                        'sessionId' => $currentSessionId,
                        'computerType' => $this->deviceType,
                        'computerIp' => $this->deviceIp,
                        'computerOs' => $this->deviceOs
                    ]);

                    // log logs
                    $logDetails = (isset($logDetails) && !empty($logDetails)) ? $logDetails : "Login Successfully";
                    $this->systemlogsModel->insert(['userId' => $user['id'], 'activityType' => '1', 'details' =>$logDetails, 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);

                    // Commit the transaction
                    $this->db->transCommit();

                    if (!empty($auto)) { return redirect()->to(base_url('Dashboard/sessionLoad')); }
                    return redirect()->to(base_url('Dashboard'));
                } else {

                    $failedAttempts = $user['failed_attempts'] + 1;
                    // Invalid login credentials
                    $this->systemlogsModel->insert(['activityType' => '3', 'details' =>'Login Failed for username: '.$username.' ('.$failedAttempts.' Attempt)', 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);

                    // Increment failed attempts
                    $this->userModel->update($user['id'], ['failed_attempts' => $failedAttempts, 'last_failed_login_at' => date('Y-m-d H:i:s')]);

                    $session->setFlashdata('msg', 'Invalid Username or Password');
                    // Commit the transaction
                    $this->db->transCommit();
                    if (!empty($auto)) { return json_encode(["statusCode" => 201]); }
                    return redirect()->to(base_url('login'));
                }
            } else {
                // If user doesn't exist
                $this->systemlogsModel->insert(['activityType' => '3', 'details' =>'Login Failed for username: '.$username, 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);
                // Commit the transaction
                $this->db->transCommit();

                $session->setFlashdata('msg', 'Invalid Username or Password');
                if (!empty($auto)) { return json_encode(["statusCode" => 201]); }
                return redirect()->to(base_url('login'));
            }
        } catch (\Exception $e) {
            // Rollback transaction and log error
            $this->db->transRollback();
            $this->systemlogsModel->insert(['activityType' => '3', 'details' =>'Login Failed for username: '.$username, 'error'=> $e->getMessage(), 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);

            $session->setFlashdata('msg', 'An error occurred. Please try again.');
            if (!empty($auto)) { return json_encode(["statusCode" => 500]); }
            return redirect()->to(base_url('login'));
        }
    }



    private function sessionLoad()
    {
        redirect()->to(base_url('Dashboard/sessionLoad'));
    }

    public function logout($user = null, $curSession = null)
    {
        $session = session();
        if($user == null && $curSession == null){
            $userID = $session->get('id');
            $currentSessionId = $session->get('current_session_id');
            $sessionEndtype = 1;
        } else{
            $userID = $user;
            $currentSessionId = $curSession;
            $sessionEndtype = 3;
        }

        // Start database transaction
        $this->db->transBegin();

        try {

            if ($userID) {
                // Update session end information
                if (!$this->userModel->update($userID, ['session_id' => null])) {
                    throw new \Exception("Failed to update session_id to null.");
                }


                $sessionTb = $this->sessionModel->where('sessionId', $currentSessionId)
                                        ->set([
                                        'sessionEndcomputerType' => $this->deviceType,
                                        'sessionEndcomputerIp' => $this->deviceIp,
                                        'sessionEndcomputerOs' => $this->deviceOs,
                                        'sessionEndtype' => $sessionEndtype
                                        ])->update();

                if (!$sessionTb) {
                    throw new \Exception("Failed to update sessionEndtype.");
                }
            }

            $this->systemlogsModel->insert(['userId' => $userID, 'activityType' => '2', 'details' =>'Logout Successfully', 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);

            // Destroy session
            $session->destroy();            
            $this->db->transCommit();
            return redirect()->to(base_url('login'));

        } catch (\Exception $e) {
            // Rollback transaction and log error
            $this->db->transRollback();
            $this->systemlogsModel->insert(['activityType' => '4', 'details' =>'Logout Failed', 'error'=> $e->getMessage(), 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);
            $session->setFlashdata('msg', 'An error occurred. Please try again.');
            return redirect()->to(base_url('Dashboard'));
        }
    }

    public function autoLogout($auto = null)
    {

        if (!empty($auto)) {
            $users = $this->userModel->where(['session_id' => null, 'id'=>$auto])->first();
            if (!empty($users)) {
                return $this->response->setJSON(['status' => 200]);
            } else{
                return $this->response->setJSON(['status' => 201]);
            }
        }

        $users = $this->userModel->where(['session_id !=' => null])->findAll();
        $currentTime = time(); // Current time in seconds

        if (!empty($users)) {
            foreach ($users as $user) {
                // Check session timeout (15 minutes inactivity = 900)

                if ($user['lastActivity'] && ($currentTime - strtotime($user['lastActivity'])) > 900) {
                    $this->logout($user['id'], $user['session_id']);
                }
            }
            return json_encode(array('status'=> 200));
        }
        return json_encode(array('status'=>'Empty user to update'));
    }

    private function getDeviceInfo()
    {
        $deviceType = $this->getDeviceType($_SERVER['HTTP_USER_AGENT']);
        $deviceIp = $_SERVER['REMOTE_ADDR'];
        $deviceOs = $this->getDeviceOS($_SERVER['HTTP_USER_AGENT']);
        
        return [
            'deviceType' => $deviceType,
            'deviceIp' => $deviceIp,
            'deviceOs' => $deviceOs
        ];
    }

    private function getDeviceType($userAgent)
    {
        if (preg_match('/mobile/i', $userAgent)) {
            return 'Mobile';
        } elseif (preg_match('/tablet/i', $userAgent)) {
            return 'Tablet';
        } else {
            return 'Desktop';
        }
    }

    private function getDeviceOS($userAgent)
    {
        if (preg_match('/windows/i', $userAgent)) {
            return 'Windows';
        } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
            return 'Mac OS';
        } elseif (preg_match('/linux/i', $userAgent)) {
            return 'Linux';
        } elseif (preg_match('/android/i', $userAgent)) {
            return 'Android';
        } elseif (preg_match('/iphone/i', $userAgent)) {
            return 'iOS';
        } else {
            return 'Unknown OS';
        }
    }
}
