<?php

namespace App\Models;

use CodeIgniter\Model;

class AsesmenModel extends Model
{

    protected $table = 'asesmen';
    protected $primaryKey = 'ID_ASESMEN';
    protected $allowedFields = ['ID_PELAYANAN','KELUHAN_UTAMA','RPS','RPD','ALERGI','KEADAAN_UMUM','TD','N','RR','SUHU','BB','TB', 'RENCANA_TINDAKAN'];

    public function getAsesmen($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_ASESMEN' => $id])->first();
    }
}
