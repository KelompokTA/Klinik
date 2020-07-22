<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\DokterModel;
use App\Models\ObatModel;
use App\Models\PasienModel;

class DokterController extends BaseController
{
    protected $DokterModel;
    protected $PasienModel;
    protected $ObatModel;
    public function __construct()
    {
        $this->DokterModel = new DokterModel();
        $this->PasienModel = new PasienModel();
        $this->ObatModel = new ObatModel();
        
    }

    public function index()
    {
        return view('Dokter/dokterDashboard');
    }

    public function pasien()
    {
        $pasien = $this->PasienModel->findAll();
        $data = [
            'title' => 'pasien',
            'pasien' => $pasien
        ];
        return view('Dokter/TablesDokter/pasien', $data);
    }

    public function dokter()
    {
        $dokter = $this->DokterModel->findAll();
        $data = [
            'title' => 'Dokter',
            'dokter' => $dokter
        ];
        return view('Dokter/TablesDokter/dokter', $data);
    }

    public function obat()
    {
        $ObatModel = new ObatModel();   
        $data = [
            'obat' => $ObatModel->getAllData()
        ];
        return view('Dokter/TablesDokter/obat', $data);
    }

    public function riwayat()
    {
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Dokter/TablesDokter/riwayat', $data);
    }

    public function save_obat()
    {
        //VALIDASI
        if(!$this->validate([
            'nama_obat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])){
            $validation =\Config\Services::validation();
            return redirect()->to('tambahObat')->withInput()->with('validation', $validation);
        }
        $this->ObatModel->save([
            'NAMA_OBAT' => $this->request->getVar('nama_obat'),
            'SATUAN_OBAT' => $this->request->getVar('satuan_obat'),
            'RUTE_PEMBERIAN' => $this->request->getVar('rute_pemberian'),
            'NO_BATCH' => $this->request->getVar('no_batch'),
            'EXPIRED' => $this->request->getVar('expired'),
            'HARGA_BELI' => $this->request->getVar('harga_beli'),
            'HARGA_JUAL' => $this->request->getVar('harga_jual'),
            'DOSIS' => $this->request->getVar('dosis')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('obatDokter');
    }
    public function tambah_obat()
    {
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Dokter/FormDokter/tambah_obat', $data);
    }

    public function hapus_obat($id)
    {
        $this->ObatModel->delete($id);
        session()->setFlashdata('Info','Data berhasil dihapus.');
        return redirect()->to(base_url('obatDokter'));
    }

    public function edit_obat($id)
    {
        $obat = $this->ObatModel->getObat($id);
        $data = [
            'validation' => \Config\Services::validation(),
            'obat' => $obat
        ];
        return view('Dokter/FormDokter/edit_obat', $data);
    }

    public function tambah_pemeriksaan()
    {
        return view('Dokter/FormDokter/tambah_pemeriksaan');
    }
    

}
