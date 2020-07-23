<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'ID_USER';
    protected $allowedFields = ['NAMA_USER', 'STATUS_USER', 'USERNAME_USER', 'PASSWORD_USER', 'FOTO_USER'];

    public function getAdmin($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_USER' => $id])->first();
    }
}
