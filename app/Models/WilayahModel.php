<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahMOdel extends Model
{
    public function get_wilayah()
    {
        return $this->db->table('provinsi')
            ->join('kabupaten', 'kabupaten.id_prov = kabupaten.id.prov')
            ->join('kecamatan', 'kecamatan.id_kab = kabupaten.id_kab')
            ->join('kelurahan', 'kelurahan.id_kec = kecamatan.id_kec')
            ->get()->getResultArray();
    }
}
