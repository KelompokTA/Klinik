<?php

namespace App\Models;

use CodeIgniter\Model;

class RujukModel extends Model
{
    protected $table = 'rujuk';
    protected $primaryKey = 'ID_RUJUK';
    protected $allowedFields = ['ID_ASESMEN', 'ID_DIAGNOSA', 'ALASAN_RUJUK', 'TUJUAN_RUJUK'];

    public function getRujuk($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_RUJUK' => $id])->first();
    }
}
