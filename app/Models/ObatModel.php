<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $BaseController;
    protected $table = 'obat';
    protected $primaryKey = 'ID_OBAT';
    protected $allowedFields = ['NAMA_OBAT', 'SATUAN_OBAT', 'RUTE_PEMBERIAN', 'NO_BATCH','STOK', 'EXPIRED', 'HARGA_BELI', 'HARGA_JUAL', 'DOSIS'];

    public function getObat($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['ID_OBAT' => $id])->first();
    }

    public function saveObat()
    {
        $ObatModel = model('App\Models\ObatModel');
        $request = \Config\Services::request();
        $data = [
            'NAMA_OBAT' => $request->getVar('nama_obat'),
            'SATUAN_OBAT' => $request->getVar('satuan_obat'),
            'RUTE_PEMBERIAN' => $request->getVar('rute_pemberian'),
            'NO_BATCH' => $request->getVar('no_batch'),
            'EXPIRED' => $request->getVar('expired'),
            'HARGA_BELI' => $request->getVar('harga_beli'),
            'HARGA_JUAL' => $request->getVar('harga_jual'),
            'DOSIS' => $request->getVar('dosis'),
            'STOK' => $request->getVar('stok')
        ];
        return $ObatModel->save($data);
    }
}
