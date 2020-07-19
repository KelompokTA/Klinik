<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'ID_DOKTER';
    protected $allowedFields = ['NAMA_DOKTER', 'STATUS_DOKTER', 'USERNAME_DOKTER', 'PASSWORD_DOKTER', 'FOTO_DOKTER', 'ID_JADWAL'];
}
