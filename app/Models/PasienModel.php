<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'ID_PASIEN';
    protected $allowedFields = ['NO_RM', 'NO_KTP', 'NAMA_PASIEN', 'JENIS_KELAMIN', 'UMUR', 'KELURAHAN', 'KECAMATAN', 'KOTA', 'PROVINSI', 'NO_TELFONE_PASIEN', 'ALAMAT_PASIEN', 'TEMPAT_LAHIR', 'TANGGAL_LAHIR'];

    public function getPasien($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_PASIEN' => $id])->first();
    }
}
