<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class DokterController extends BaseController
{
        public function index()
    {
        $data = [
            'pasien' => $this->PasienModel->findAll(),
            'dokter' => $this->DokterModel->getDokter(),
            'obat' => $this->ObatModel->getObat()
        ];
        return view('Dokter/dokterDashboard', $data);
    }

    public function pasien()
    {
        $data = [
            'pasien' => $this->PasienModel->findAll()
        ];
        return view('Dokter/TablesDokter/pasien', $data);
    }

    public function dokter()
    {
        $data = [
            'dokter' => $this->DokterModel->getDokter()
        ];
        return view('Dokter/TablesDokter/dokter', $data);
    }

    public function obat()
    {
        $data = [
            'obat' => $this->ObatModel->getObat()
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
        if (!$this->validate([
            'nama_obat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('tambahObat')->withInput();
        }
        $this->ObatModel->saveObat();
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
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('obatDokter'));
    }

    public function edit_obat($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'obat' => $this->ObatModel->getObat($id)
        ];
        return view('Dokter/FormDokter/edit_obat', $data);
    }

    public function update_obat($id)
    {
        $this->ObatModel->save([
            'ID_OBAT' => $id,
            'NAMA_OBAT' => $this->request->getVar('nama_obat'),
            'SATUAN_OBAT' => $this->request->getVar('satuan_obat'),
            'RUTE_PEMBERIAN' => $this->request->getVar('rute_pemberian'),
            'NO_BATCH' => $this->request->getVar('no_batch'),
            'EXPIRED' => $this->request->getVar('expired'),
            'HARGA_BELI' => $this->request->getVar('harga_beli'),
            'HARGA_JUAL' => $this->request->getVar('harga_jual'),
            'DOSIS' => $this->request->getVar('dosis')
        ]);
        session()->setFlashdata('Info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('obatDokter'));
    }

    public function tambah_pemeriksaan()
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
            'pelayanan' => $this->PelayananModel->getPelayanan(),
            'obat' => $this->ObatModel->getObat()
        ];
        return view('Dokter/FormDokter/tambah_pemeriksaan', $data);
    }
}
