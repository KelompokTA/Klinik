<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{

    protected $table = 'pendaftaran';
    protected $primaryKey = 'ID_PENDAFTARAN';
    protected $useTimestamps = true;
    protected $allowedFields = ['ID_ADMIN', 'ID_PASIEN', 'NOMER_ANTRIAN', 'created_at'];

    public function getPendaftaran($id = false)
    {
        if ($id === false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('pendaftaran');
            $builder->select('*');
            $builder->join('pasien', 'pasien.ID_PASIEN = pendaftaran.ID_PASIEN');
            $query = $builder->get();
            $results = $query->getResultArray();
            return $results;
        }

        return $this->where(['ID_PENDAFTARAN' => $id])->first();
    }
}
