<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{   
    protected $table = 'dokter';
    protected $primaryKey = 'ID_DOKTER';
    protected $allowedFields = ['NAMA_DOKTER', 'STATUS_DOKTER', 'EMAIL_DOKTER', 'PASSWORD_DOKTER', 'FOTO_DOKTER', 'ID_JADWAL', 'AKTIF'];

    public function getDokter($id = false)
    {
        if ($id === false) {
        $db      = \Config\Database::connect();
        $builder = $db->table('dokter');
        $builder->select('*');
        $builder->join('jadwal', 'jadwal.ID_JADWAL = dokter.ID_JADWAL');
        $query = $builder->get();
        $results = $query->getResultArray();
        return $results;
        
    }
        return $this->where(['ID_DOKTER' => $id])->first();
    }    
}
