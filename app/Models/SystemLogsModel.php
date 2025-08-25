<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class SystemLogsModel extends Model{
    protected $table = 'tb_system_logs';
    protected $allowedFields = ['id', 'userId', 'dateTime', 'activityType', 'controllerId', 'clientId', 'details', 'jsonData', 'deviceType', 'deviceIp', 'deviceOs', 'error'];

}

// $this->systemlogsModel->insert(['userId' => $user['id'], 'activityType' => '1', 'details' =>, 'deviceType'=>$this->deviceType, 'deviceIp'=>$this->deviceIp, 'deviceOs'=>$this->deviceOs]);
