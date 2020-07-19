<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'ID_USER';
    protected $allowedFields = ['NAMA_USER', 'STATUS_USER', 'USERNAME_USER', 'PASSWORD_USER', 'FOTO_USER'];
}
