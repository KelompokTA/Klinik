<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    protected $table = 'login';
    protected $primaryKey = 'ID_LOGIN';


    public function cek_login($email, $password)
    {
        return $this->db->table('login')
            ->where(array('EMAIL' => $email, 'PASSWORD' => $password))
            ->get()->getRowArray();
    }
}
