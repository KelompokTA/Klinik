<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $primaryKey = 'ID_PELAYANAN';
    protected $allowedFields = [];

    public function getPelayanan($id = false)
    {
        if ($id === false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('pelayanan');
            $builder->select('*');
            $builder->join('dokter', 'dokter.ID_DOKTER = pelayanan.ID_DOKTER');
            $query = $builder->get();
            $results = $query->getResultArray();
            return $results;
        }

        return $this->where(['ID_PELAYANAN' => $id])->first();
    }
}
