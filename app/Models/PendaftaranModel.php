<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class PendaftaranModel extends Model
{

    protected $table = 'pendaftaran';
    protected $primaryKey = 'ID_PENDAFTARAN';
    protected $allowedFields = ['ID_ADMIN', 'ID_DOKTER', 'ID_PASIEN', 'NOMER_ANTRIAN', 'DARURAT'];

    public function getPendaftaran($id = false)
    {
        if ($id === false) {
            setlocale(LC_ALL, 'id_ID.utf8');
            $tgl = "2020-08-27";
            $db      = \Config\Database::connect();
            $builder = $db->table('pendaftaran');
            $builder->select('*');
            $builder->join('pasien', 'pasien.ID_PASIEN = pendaftaran.ID_PASIEN');
            $builder->join('admin', 'admin.ID_ADMIN = pendaftaran.ID_ADMIN');
            $builder->join('dokter', 'dokter.ID_DOKTER = pendaftaran.ID_DOKTER');
            $builder->join('jadwal', 'jadwal.ID_JADWAL = dokter.ID_JADWAL');
            $builder->orderBy('NOMER_ANTRIAN', 'DESC');
            $builder->where('created_pendaftaran', $tgl);
            $query = $builder->get();
            $results = $query->getResultArray();
            return $results;
        }

        return $this->where(['ID_PENDAFTARAN' => $id])->first();
    }
}
