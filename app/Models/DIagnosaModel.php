<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{
    protected $table = 'diagnosa';
    protected $primaryKey = 'ID_DIAGNOSA';
    protected $useTimestamps = true;
    protected $allowedFields = ['ID_ASESMEN','DIAGNOSA_PRIMER','DIAGNOSA_SEKUNDER','DIAGNOSA_TERSIER'];

    public function getDiagnosa($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_DIAGNOSA' => $id])->first();
    }
}
