<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    function cek_login($email,$password)
    {
        $cekLoginAdmin = $this->db->table('admin')
        ->where(['EMAIL_ADMIN' => $email, 'PASSWORD_ADMIN' => $password])
        ->get()->getRowArray();
        $cekLoginDokter = $this->db->table('dokter')
        ->where(['EMAIL_DOKTER' => $email, 'PASSWORD_DOKTER' => $password])
        ->get()->getRowArray();
        $cekLoginAll = [$cekLoginAdmin , $cekLoginDokter];
        return $cekLoginAll;
    }
}
