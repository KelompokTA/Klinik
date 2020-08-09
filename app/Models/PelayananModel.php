<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $primaryKey = 'ID_PELAYANAN';
    protected $useTimestamps = true;
    protected $allowedFields = ['ID_PENDAFTARAN', 'STATUS_PASIEN', 'BIAYA_PELAYANAN','TOTAL_BIAYA_RESEP'];

    public function getPelayanan($id = false)
    {
        if ($id === false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('pelayanan');
            $builder->select('*');
            $builder->join('pendaftaran', 'pendaftaran.ID_PENDAFTARAN = pelayanan.ID_PENDAFTARAN');
            $builder->join('riwayat', 'riwayat.ID_RIWAYAT = pelayanan.ID_RIWAYAT');
            $query = $builder->get();
            $results = $query->getResultArray();
            return $results;
        }

        return $this->where(['ID_PELAYANAN' => $id])->first();
    }
}
