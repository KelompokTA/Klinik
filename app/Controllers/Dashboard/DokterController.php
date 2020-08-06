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
            'dokter' => $this->DokterModel->getDokter(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
            'pelayanan' => $this->PelayananModel->getPelayanan(),
            'obat' => $this->ObatModel->getObat(),
        ];
        return view('Dokter/FormDokter/tambah_pemeriksaan', $data);
    }

    // public function tambah_pemeriksaan_byID($id)
    // {
    //     $data = [
    //         'validation' => \Config\Services::validation(),
    //         'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
    //         'pelayanan' => $this->PelayananModel->getPelayanan(),
    //         'obat' => $this->ObatModel->getObat(),
    //         'resep' => $this->ResepModel->getResep($id)
    //     ];
    //     return view('Dokter/FormDokter/tambah_pemeriksaan', $data);
    // }

    public function save_pelayanan()
    {
        $this->PelayananModel->save([
            'ID_DOKTER' => $this->request->getVar('dokter'),
            'BIAYA_DOKTER' => $this->request->getVar('biaya'),
        ]);
        session()->setFlashdata('sukses', '');
        return redirect()->to(base_url('tambahPemeriksaan'));
    }

    public function tambah_resep($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM resep r INNER JOIN pelayanan p ON r.ID_PELAYANAN = p.ID_PELAYANAN INNER JOIN obat o ON r.ID_OBAT = o.ID_OBAT WHERE r.ID_PELAYANAN = '. $id);
        $results = $query->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'resep' => $results,
            'obat' => $this->ObatModel->getObat(),
            'Pelayanan' => $this->PelayananModel->getPelayanan(),
            'id' => $id
        ];
        // dd($data);
        return view('Dokter/FormDokter/tambah_resep', $data);
    }

    public function save_resep($id)
    {
        // dd($this->request->getVar());
        // $this->ResepModel->save([
        //     'ID_OBAT' => $this->request->getVar('ID_OBAT'),
        //     'ID_PELAYANAN' => $this->request->getVar('ID_PELAYANAN'),
        //     'JUMLAH' => $this->request->getVar('JUMLAH')

        // ]);
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM transaksi WHERE created_at = $id");
        $results = $query->getResult();
        $data =[
            'arip' => $results
        ];
        return view('Dokter/FormDokter/tambah_pemeriksaan', $data);
    }
}
