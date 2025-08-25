<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'db_users';
    protected $allowedFields = ['id', 'username', 'password', 'fname', 'mname', 'lname', 'email', 'gender', 'qualification', 'role_id', 'nhifCode', 'permission', 'creator', 'edit', 'deletor', 'page', 'created_dateTime', 'created_by', 'status', 'dob', 'phone', 'address', 'elevel', 'designation', 'location', 'auth', 'approve', 'updatedBy', 'updatedTime', 'session_id', 'department', 'lastActivity', 'signature', 'proff_reg_no', 'failed_attempts', 'last_failed_login_at', 'marital_status', 'nationality', 'residence', 'pb_region', 'pb_district', 'pb_ward', 'pd_region', 'pd_district', 'pd_ward', 'kin_name', 'kin_relation', 'kin_phone'];


    function getPermission($controller, $accessLevel, $data)
    {

        $builder = $this->db->table('tb_sidebar');
        $builder->select('link');
        $builder->where('name', $controller);
        $query = $builder->get();
        $result = $query->getRow();

        if (!$result) {
            return view('access-denied', $data);
        }

        $sidebarId = $result->id;

        $builder = $this->db->table($this->table);
        $builder->where("FIND_IN_SET($sidebarId, $accessLevel) > 0");
        $query = $builder->get();
        $hasAccess = $query->getNumRows() > 0;
        return $hasAccess ? 200 : view('access-denied', $data);

            // $checkPermission->where("CONCAT(',', $accessLevel, ',') LIKE '%," . $this->db->escapeLikeString($results->id) . ",%'");

    }

    function updateLastActivity($userId)
    {

    }


}
