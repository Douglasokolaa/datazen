<?php

namespace App\Models;

defined('APPPATH') or exit('No direct script access allowed');

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    // protected $dateFormat = 'DATETIME';
    protected $createdField = 'created';
    protected $updatedField = 'modified';
    protected $allowedFields = [
        'email', 'password', 'name', 'phone', 'organization', 'course', 'hours', 'status', 'pass_reset_token', 'verify_token'
    ];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    public function beforeInsert(array $data)
    {
        //password hash
        $data = $this->hashPassword($data);
        return $data;
    }

    public function beforeUpdate(array $data)
    {
        //password hash
        $data = $this->hashPassword($data);
        return $data;
    }

    public function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}
