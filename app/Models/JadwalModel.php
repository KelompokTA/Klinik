<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';    
    protected $primaryKey = 'ID_JADWAL';
    protected $allowedFields = ['HARI', 'JAM_PRAKTEK', 'POLI'];

    public function getJadwal($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_JADWAL' => $id])->first();
    }
}
