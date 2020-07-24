<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{   
    protected $table = 'dokter';
    protected $primaryKey = 'ID_DOKTER';
    protected $allowedFields = ['NAMA_DOKTER', 'STATUS_DOKTER', 'USERNAME_DOKTER', 'PASSWORD_DOKTER', 'FOTO_DOKTER', 'ID_JADWAL'];

    public function getDokter()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('dokter');
        $builder->select('*');
        $builder->join('jadwal', 'jadwal.ID_JADWAL = dokter.ID_JADWAL');
        $query = $builder->get();
        $results = $query->getResultArray();
        return $results;
    }
        
}
