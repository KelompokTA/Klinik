<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'ID_USER';
    protected $allowedFields = ['NAMA_USER', 'STATUS_USER', 'FOTO_USER'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('user')->get()->getResultArray();
    }

    public function getAdmin($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['ID_USER' => $id])
            ->first();
    }

    public function hapus_admin($id)
    {
        return $this->db->table('user')->delete(['ID_USER' => $id]);
    }
}
