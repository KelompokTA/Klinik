<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'ID_OBAT';
    protected $allowedFields = ['NAMA_OBAT', 'SATUAN_OBAT', 'RUTE_PEMBERIAN', 'NO_BATCH', 'EXPIRED', 'HARGA_BELI', 'HARGA_JUAL', 'DOSIS'];

    public function getObat($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_OBAT' => $id])->first();
    }
}
