<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{

    protected $table = 'pendaftaran';
    protected $primaryKey = 'ID_PENDAFTARAN';
    protected $useTimestamps = true;
    protected $allowedFields = ['ID_ADMIN', 'ID_PASIEN', 'NOMER_ANTRIAN'];

    public function getPendaftaran($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_PENDAFTARAN' => $id])->first();
    }
}
