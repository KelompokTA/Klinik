<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class DokterController extends BaseController
{
    public function index()
    {
        if (session()->get('ID_DOKTER') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'pasien' => $this->PasienModel->findAll(),
            'dokter' => $this->DokterModel->getDokter(),
            'obat' => $this->ObatModel->getObat()
        ];
        return view('Dokter/dokterDashboard', $data);
    }

    public function pasien()
    {
        if (session()->get('ID_DOKTER') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'pasien' => $this->PasienModel->findAll()
        ];
        return view('Dokter/TablesDokter/pasien', $data);
    }

    public function dokter()
    {
        if (session()->get('ID_DOKTER') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'dokter' => $this->DokterModel->getDokter()
        ];
        return view('Dokter/TablesDokter/dokter', $data);
    }

    public function obat()
    {
        if (session()->get('ID_DOKTER') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'obat' => $this->ObatModel->getObat()
        ];
        return view('Dokter/TablesDokter/obat', $data);
    }

    public function riwayat()
    {
        if (session()->get('ID_DOKTER') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM diagnosa a INNER JOIN asesmen b ON a.ID_ASESMEN = b.ID_ASESMEN INNER JOIN pelayanan c ON b.ID_PELAYANAN = c.ID_PELAYANAN INNER JOIN pendaftaran d ON c.ID_PENDAFTARAN = d.ID_PENDAFTARAN INNER JOIN pasien e ON d.ID_PASIEN = e.ID_PASIEN');
        $results = $query->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'riwayat' => $results
        ];
        return view('Dokter/TablesDokter/riwayat', $data);
    }
    public function detail_riwayat($id1, $id2)
    {
        $db = \Config\Database::connect();
        $query1 = $db->query('SELECT * FROM diagnosa a INNER JOIN asesmen b ON a.ID_ASESMEN = b.ID_ASESMEN INNER JOIN pelayanan c ON b.ID_PELAYANAN = c.ID_PELAYANAN INNER JOIN pendaftaran d ON c.ID_PENDAFTARAN = d.ID_PENDAFTARAN INNER JOIN pasien e ON d.ID_PASIEN = e.ID_PASIEN INNER JOIN dokter f ON d.ID_DOKTER = f.ID_DOKTER WHERE a.ID_DIAGNOSA = ' . $id1);
        $results1 = $query1->getResultArray();
        $query2 = $db->query('SELECT * FROM resep a INNER JOIN pelayanan b ON a.ID_PELAYANAN = b.ID_PELAYANAN INNER JOIN obat c ON a.ID_OBAT = c.ID_OBAT WHERE a.ID_PELAYANAN = ' . $id2);
        $results2 = $query2->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'detail' => $results1,
            'resep' => $results2,
        ];
        return view('Dokter/TablesDokter/detail_riwayat', $data);
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
            'STOK' => $this->request->getVar('stok'),
            'HARGA_BELI' => $this->request->getVar('harga_beli'),
            'HARGA_JUAL' => $this->request->getVar('harga_jual'),
            'KEKUATAN_SEDIAAN' => $this->request->getVar('kekuatan_sediaan'),
            'BENTUK_SEDIAAN' => $this->request->getVar('bentuk_sediaan')
        ]);
        session()->setFlashdata('Info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('obatDokter'));
    }


    public function tambah_pelayanan()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM pelayanan a INNER JOIN pendaftaran b ON a.ID_PENDAFTARAN = b.ID_PENDAFTARAN INNER JOIN pasien c ON b.ID_PASIEN = c.ID_PASIEN INNER JOIN dokter d ON b.ID_DOKTER = d.ID_DOKTER');
        $results = $query->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
            'pelayanan' => $results
        ];
        return view('Dokter/FormDokter/tambah_pelayanan', $data);
    }

    public function save_pelayanan()
    {

        $this->PelayananModel->save([
            'ID_PENDAFTARAN' => $this->request->getVar('id_pendaftaran'),
            'BIAYA_PELAYANAN' => $this->request->getVar('biaya_pelayanan'),
        ]);
        session()->setFlashdata('Info', 'Pelayanan Berhasil Ditambah');
        return redirect()->to(base_url('tambahPelayanan'));
    }

    public function hapus_pelayanan($id)
    {
        $this->PelayananModel->delete($id);
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('tambahPelayanan'));
    }

    public function edit_pelayanan($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
            'pelayanan' => $this->PelayananModel->getPelayanan($id)
        ];
        // dd($data);
        return view('Dokter/FormDokter/edit_pelayanan', $data);
    }

    public function update_pelayanan($id)
    {
        $this->PelayananModel->save([
            'ID_PELAYANAN' => $id,
            'ID_PENDAFTARAN' => $this->request->getVar('id_pendaftaran'),
            'BIAYA_PELAYANAN' => $this->request->getVar('biaya_pelayanan'),
        ]);
        session()->setFlashdata('Info', 'update Pelayanan Berhasil');
        return redirect()->to(base_url('tambahPelayanan'));
    }

    public function update_pelayanan_biaya($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT SUM(TOTAL_BIAYA_OBAT) AS TOTAL_BIAYA_RESEP FROM resep WHERE ID_PELAYANAN =' . $id);
        $results = $query->getResultArray();
        foreach ($results as $row) {
            $row['TOTAL_BIAYA_RESEP'];
        }
        $this->PelayananModel->save([
            'ID_PELAYANAN' => $id,
            'TOTAL_BIAYA_RESEP' => $row,
        ]);
        session()->setFlashdata('Info', 'update Pelayanan Berhasil');
        return redirect()->to(base_url('tambahPelayanan'));
    }

    public function tambah_resep($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM resep a INNER JOIN pelayanan b ON a.ID_PELAYANAN = b.ID_PELAYANAN INNER JOIN obat c ON a.ID_OBAT = c.ID_OBAT WHERE a.ID_PELAYANAN = ' . $id);
        $results = $query->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'obat' => $this->ObatModel->getObat(),
            'resep' => $results,
            'id' => $id
        ];
        // dd($data);
        return view('Dokter/FormDokter/tambah_resep', $data);
    }

    public function save_resep($id)
    {
        $jumlah = $this->request->getVar('jumlah');
        $obat = $this->request->getVar('id_obat');
        $dataObat = explode('-', $obat);
        $harga_obat = $dataObat['1'];
        $this->ResepModel->save([
            'ID_PELAYANAN' => $this->request->getVar('id_pelayanan'),
            'ID_OBAT' => $this->request->getVar('id_obat'),
            'JUMLAH' => $this->request->getVar('jumlah'),
            'DOSIS' => $this->request->getVar('dosis'),
            'TOTAL_BIAYA_OBAT' => $harga_obat * $jumlah
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

    public function tambah_asesmen($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'id' => $id
        ];
        return view('Dokter/FormDokter/tambah_asesmen', $data);
    }

    public function save_asesmen($id)
    {
        // dd($this->request->getVar());
        $this->AsesmenModel->save([
            'ID_PELAYANAN' => $this->request->getVar('id_pelayanan'),
            'KELUHAN_UTAMA' => $this->request->getVar('keluhan_utama'),
            'KEADAAN_UMUM' => $this->request->getVar('keadaan_umum'),
            'RPS' => $this->request->getVar('rps'),
            'RPD' => $this->request->getVar('rpd'),
            'ALERGI' => $this->request->getVar('alergi'),
            'TD' => $this->request->getVar('tekanan_darah'),
            'N' => $this->request->getVar('nadi'),
            'RR' => $this->request->getVar('respirasi'),
            'SUHU' => $this->request->getVar('suhu'),
            'BB' => $this->request->getVar('berat_badan'),
            'TB' => $this->request->getVar('tinggi_badan'),
            'RENCANA_TINDAKAN' => $this->request->getVar('rencana_tindakan')
        ]);
        //  insert into from diagnosa (id asesmen) values ((select max(idassesmen+1) ..)) subquery
        if ($this->request->getVar('rencana_tindakan') == 'Diagnosa') {
            session()->setFlashdata('Info', 'Asesmen Berhasil Ditambah');
            return redirect()->to(base_url('tambah_diagnosa/' . $id))->withInput();
        }
        $db = \Config\Database::connect();
        $query = $db->query('SELECT MAX(ID_ASESMEN) AS id FROM asesmen');
        $results = $query->getResultArray();
        foreach ($results as $row) {
            $row['id'];
        }
        $this->DiagnosaModel->save([
            'ID_ASESMEN' => $row,
        ]);
        session()->setFlashdata('Info', 'Asesmen Berhasil Ditambah');
        return redirect()->to(base_url('tambah_rujukan/' . $id))->withInput();
    }

    public function tambah_diagnosa($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT MAX(ID_ASESMEN) FROM asesmen');
        $results = $query->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'asesmen' => $results,
            'id' => $id
        ];
        session()->setFlashdata('Info', 'Asesmen Berhasil Ditambah');
        return view('Dokter/FormDokter/tambah_diagnosa', $data);
    }

    public function save_diagnosa($id)
    {
        // dd($this->request->getVar());
        $this->DiagnosaModel->save([
            'ID_ASESMEN' => $this->request->getVar('id_asesmen'),
            'DIAGNOSA_PRIMER' => $this->request->getVar('diagnosa_primer'),
            'DIAGNOSA_SEKUNDER' => $this->request->getVar('diagnosa_sekunder'),
            'DIAGNOSA_TERSIER' => $this->request->getVar('diagnosa_tersier')
        ]);
        if ($this->request->getVar('aksi') == 'surat_rujukan') {
            session()->setFlashdata('Info', 'Diagnosa Berhasil Ditambah');
            return redirect()->to(base_url('tambah_rujukan/' . $id))->withInput();
        }
        $this->PelayananModel->save([
            'ID_PELAYANAN' => $id,
            'STATUS_PASIEN' => 'Diagnosa Selesai'
        ]);
        session()->setFlashdata('Info', 'Diagnosa Berhasil Ditambah');
        return redirect()->to(base_url('tambahPelayanan'))->withInput();
    }

    public function tambah_rujukan($id)
    {
        $db = \Config\Database::connect();
        $query_asesmen = $db->query('SELECT MAX(ID_ASESMEN) FROM asesmen');
        $result_asesmen = $query_asesmen->getResultArray();
        $query_diagnosa = $db->query('SELECT * FROM diagnosa ORDER BY ID_DIAGNOSA DESC LIMIT 1');
        $result_diagnosa = $query_diagnosa->getResultArray();
        $data = [
            'validation' => \Config\Services::validation(),
            'asesmen' => $result_asesmen,
            'diagnosa' => $result_diagnosa,
            'id' => $id
        ];
        return view('Dokter/FormDokter/tambah_rujukan', $data);
    }

    public function save_rujukan($id)
    {

        // dd($this->request->getVar());
        $this->RujukModel->save([
            'ID_ASESMEN' => $this->request->getVar('id_asesmen'),
            'ID_DIAGNOSA' => $this->request->getVar('id_diagnosa'),
            'ALASAN_RUJUK' => $this->request->getVar('alasan_rujuk'),
            'TUJUAN_RUJUK' => $this->request->getVar('tujuan_rujuk')
        ]);
        $this->PelayananModel->save([
            'ID_PELAYANAN' => $id,
            'STATUS_PASIEN' => 'Rujukan'
        ]);
        session()->setFlashdata('Info', 'Surat Rujukan Berhasil Dibuat');
        return redirect()->to(base_url('tambahPelayanan'))->withInput();
    }
}
