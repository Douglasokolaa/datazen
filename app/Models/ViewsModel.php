<?php

namespace App\Models;

defined('APPPATH') or exit('No direct script access allowed');

use CodeIgniter\Model;

class ViewsModel extends Model
{
    protected $table = 'viewed_modules';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'module_id','user_id','course_id','link','description'
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
