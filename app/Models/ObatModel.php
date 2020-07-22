<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'ID_OBAT';
    protected $allowedFields = ['NAMA_OBAT','SATUAN_OBAT','RUTE_PEMBERIAN','NO_BATCH','EXPIRED','HARGA_BELI','HARGA_JUAL','DOSIS'];

    public function getObat($id = false)
    {
        if ($id === false) {
            return $this->table('obat')
            ->get()
                ->getResultArray();
        } else {
            return $this->table('obat')
            ->where('ID_OBAT', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['ID_OBAT' => $id]);
    }
}
