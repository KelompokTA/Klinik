<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{

    protected $table = 'admin';
    protected $primaryKey = 'ID_ADMIN';
    protected $allowedFields = ['NAMA_ADMIN', 'STATUS_ADMIN', 'EMAIL_ADMIN', 'PASSWORD_ADMIN', 'FOTO_ADMIN'];

    public function getAdmin($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_ADMIN' => $id])->first();
    }
}
