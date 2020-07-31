<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'ID_RIWAYAT';
    protected $allowedFields = [];

    public function getRiwayat($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_RIWAYAT' => $id])->first();
    }
}
