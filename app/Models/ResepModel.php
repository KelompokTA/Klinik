<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = 'resep';
    protected $primaryKey = 'ID_RESEP';
    protected $allowedFields = ['ID_PELAYANAN', 'ID_OBAT', 'JUMLAH'];

    public function getResep($id = false)
    {
        if ($id === false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('resep');
            $builder->select('*');
            $builder->join('pelayanan', 'pelayanan.ID_PELAYANAN = resep.ID_PELAYANAN');
            $builder->join('obat', 'obat.ID_OBAT = resep.ID_OBAT');
            $query = $builder->get();
            $results = $query->getResultArray();
            return $results;
        }
        return $this->where(['ID_PELAYANAN' => $id])->first();
    }    
}