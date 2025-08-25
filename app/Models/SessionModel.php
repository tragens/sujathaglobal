<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class SessionModel extends Model{
    protected $table = 'tb_session';
    protected $allowedFields = ['id', 'userId', 'sessionId', 'sessionStart', 'sessionEnd', 'computerType', 'computerIp', 'computerName', 'computerOs', 'sessionEndcomputerType', 'sessionEndcomputerIp', 'sessionEndcomputerName', 'sessionEndcomputerOs', 'sessionEndtype'];



}

