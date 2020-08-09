<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{

    protected $table = 'transaksi';
    protected $primaryKey = 'ID_TRANSAKSI';
    protected $useTimestamps = true;
    protected $allowedFields = ['ID_ADMIN','ID_PELAYANAN','TOTAL_BIAYA_TRANSAKSI'];

    public function getLaporan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_TRANSAKSI' => $id])->first();
    }
}
