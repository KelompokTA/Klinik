<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahModel extends Model
{
    public function get_wilayah()
    {
        return $this->db->table('provinces')
            ->join('regencies', 'regencies.province_id = provinces.id')
            ->join('districts', 'districts.regency_id = regencies.id')
            ->join('villages', 'villages.district_id = districts.id')
            ->get()->getResultArray();
    }
}
