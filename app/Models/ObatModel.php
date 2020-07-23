<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'ID_OBAT';
    protected $allowedFields = ['NAMA_OBAT', 'SATUAN_OBAT', 'RUTE_PEMBERIAN', 'NO_BATCH', 'EXPIRED', 'HARGA_BELI', 'HARGA_JUAL', 'DOSIS'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('obat')->get()->getResultArray();
    }

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

    public function hapus_obat($id)
    {
        return $this->db->table('obat')->delete(['ID_OBAT' => $id]);
    }
}
