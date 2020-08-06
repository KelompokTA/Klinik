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


    public function tambah_pelayanan()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM pelayanan a INNER JOIN dokter b ON a.ID_DOKTER = b.ID_DOKTER INNER JOIN pendaftaran c ON a.ID_PENDAFTARAN = c.ID_PENDAFTARAN INNER JOIN pasien d ON d.ID_PASIEN = c.ID_PASIEN');
        $results = $query->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'dokter' => $this->DokterModel->getDokter(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
            'pelayanan' => $results
        ];
        return view('Dokter/FormDokter/tambah_pelayanan', $data);
    }

    public function save_pelayanan()
    {
        $this->PelayananModel->save([
            'ID_PENDAFTARAN' => $this->request->getVar('id_pendaftaran'),
            'ID_DOKTER' => $this->request->getVar('id_dokter'),
            'BIAYA_DOKTER' => $this->request->getVar('biaya_dokter'),
        ]);
        session()->setFlashdata('Info', 'Pelayanan Berhasil Ditambah');
        return redirect()->to(base_url('tambahPelayanan'));
    }

    public function tambah_resep($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM resep r INNER JOIN pelayanan p ON r.ID_PELAYANAN = p.ID_PELAYANAN INNER JOIN obat o ON r.ID_OBAT = o.ID_OBAT WHERE r.ID_PELAYANAN = ' . $id);
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
        $this->ResepModel->save([
            'ID_PELAYANAN' => $this->request->getVar('id_pelayanan'),
            'ID_OBAT' => $this->request->getVar('id_obat'),
            'JUMLAH' => $this->request->getVar('jumlah')
        ]);
        session()->setFlashdata('Info', 'Resep Berhasil Ditambah');
        return redirect()->to(base_url('tambah_resep/' . $id))->withInput();
    }

    public function hapus_resep($id, $id2)
    {
        $this->ResepModel->where('ID_OBAT', $id)->delete();
        session()->setFlashdata('Info', 'Resep Berhasil hapus');
        return redirect()->to(base_url('tambah_resep/' . $id2))->withInput();
    }
}
