<?php

namespace App\Models;

defined('APPPATH') or exit('No direct script access allowed');

use CodeIgniter\Model;

class CoursesModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title','modules'
    ];

    // protected $beforeInsert = ['beforeInsert'];
    // protected $beforeUpdate = ['beforeUpdate'];

    // public function beforeInsert(array $data)
    // {
    //     //password hash
    //     $data = $this->hashPassword($data);
    //     return $data;
    // }

    // public function beforeUpdate(array $data)
    // {
    //     //password hash
    //     $data = $this->hashPassword($data);
    //     return $data;
    // }

    // public function hashPassword(array $data)
    // {
    //     if (isset($data['data']['password'])) {
    //         $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    //     }
    //     return $data;
    // }
}
