<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    function cek_login($email,$password)
    {
        return $this->db->table('admin')
        ->where(['EMAIL_ADMIN' => $email, 'PASSWORD_ADMIN' => $password])
        ->get()->getRowArray();
    }
}
