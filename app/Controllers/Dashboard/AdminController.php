<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class AdminController extends BaseController
{
    public function index()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM transaksi a 
        INNER JOIN pelayanan b ON a.ID_PELAYANAN = b.ID_PELAYANAN 
        INNER JOIN pendaftaran c ON b.ID_PENDAFTARAN = c.ID_PENDAFTARAN 
        INNER JOIN admin d ON c.ID_ADMIN = d.ID_ADMIN 
        INNER JOIN pasien e ON c.ID_PASIEN = e.ID_PASIEN');
        $results = $query->getResultArray();
        // dd($results);
        $data = [
            'pasien' => $this->PasienModel->getPasien(),
            'dokter' => $this->DokterModel->getDokter(),
            'admin' => $this->AdminModel->getAdmin(),
            'dashboard' => $results
        ];

        return view('Admin/adminDashboard', $data);
    }

    public function pasien()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $pasien = $this->PasienModel->findAll();

        $data = [
            'pasien' => $pasien,
        ];
        return view('Admin/TablesAdmin/pasien', $data);
    }
    public function rujuk()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $rujuk = $this->RujukModel->findAll();

        $data = [
            'rujuk' => $rujuk,
        ];
        return view('Admin/TablesAdmin/rujuk', $data);
    }

    public function dokter()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'dokter' => $this->DokterModel->getDokter()
        ];
        return view('Admin/TablesAdmin/dokter', $data);
    }

    public function admin()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        // $admin = $this->AdminModel->findAll();
        $data = [
            'admin' => $this->AdminModel->getAdmin()
        ];
        return view('Admin/TablesAdmin/admin', $data);
    }

    public function laporan()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'laporan' => $this->LaporanModel->getLaporan()
        ];
        return view('Admin/TablesAdmin/laporan', $data);
    }

    public function pendaftaran()
    {
        if (session()->get('ID_ADMIN') == '') {
            session()->setFlashdata('Info', 'Anda harus login terlebihdahulu');
            return redirect()->to(base_url('login'));
        }
        $db = \Config\Database::connect();
        $tgl = date('Y-m-d');
        // dd($tgl);
        $query = $db->query("SELECT max(NOMER_ANTRIAN) as nextAntrian FROM pendaftaran where created_pendaftaran = '$tgl' GROUP BY created_pendaftaran");
        $results = $query->getRowArray();
        $data = [
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran(),
            'pasien' => $this->PasienModel->getPasien(),
            'admin' => $this->AdminModel->getAdmin(),
            'dokter' => $this->DokterModel->getDokter(),
            'antrian' => $results
        ];
        // dd($data);
        return view('Admin/FormAdmin/pendaftaran', $data);
    }
    public function hapus_antrian($id)
    {
        $this->PendaftaranModel->delete($id);
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('pendaftaran'));
    }


    public function save_pasien()
    {
        //VALIDASI
        if (!$this->validate([
            'no_rm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('tambahPasien')->withInput()->with('validation', $validation);
        }
        // dd($this->request->getVar());
        $this->PasienModel->save([
            'NO_RM' => $this->request->getVar('no_rm'),
            'NO_KTP' => $this->request->getVar('no_ktp'),
            'NAMA_PASIEN' => $this->request->getVar('nama_pasien'),
            'JENIS_KELAMIN' => $this->request->getVar('jenis_kelamin'),
            'UMUR' => $this->request->getVar('umur'),
            'KELURAHAN' => $this->request->getVar('kelurahan'),
            'KECAMATAN' => $this->request->getVar('kecamatan'),
            'KOTA' => $this->request->getVar('kota'),
            'PROVINSI' => $this->request->getVar('provinsi'),
            'TELFON_PASIEN' => $this->request->getVar('telfon_pasien'),
            'ALAMAT_PASIEN' => $this->request->getVar('alamat'),
            'TEMPAT_LAHIR' => $this->request->getVar('tempat_lahir'),
            'TANGGAL_LAHIR' => $this->request->getVar('tanggal_lahir')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('pasienAdmin');
    }

    public function tambah_pasien()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/FormAdmin/tambah_pasien', $data);
    }

    public function hapus_pasien($id)
    {
        $this->PasienModel->delete($id);
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('pasienAdmin'));
    }

    public function edit_pasien($id)
    {
        // $user = $this->AdminModel->getUser($id);
        $data = [
            'validation' => \Config\Services::validation(),
            'pasien' => $this->PasienModel->getPasien($id)
        ];
        return view('Admin/FormAdmin/edit_pasien', $data);
    }
    public function cetak_kartu($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'pasien' => $this->PasienModel->getPasien($id)
        ];
        return view('Admin/FormAdmin/cetak_kartu', $data);
    }
    public function cetak_antrian($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT POLI,DARURAT FROM pendaftaran a INNER JOIN dokter b ON a.ID_DOKTER = b.ID_DOKTER INNER JOIN jadwal c ON b.ID_JADWAL = c.ID_JADWAL WHERE a.ID_PENDAFTARAN = ' . $id);
        $results = $query->getResultArray();

        $data = [
            'validation' => \Config\Services::validation(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran($id),
            'poli' => $results
        ];
        // dd($data);
        return view('Admin/FormAdmin/cetak_antrian', $data);
    }

    public function cetak_kwitansi($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM transaksi a
        INNER JOIN pelayanan b ON a.ID_PELAYANAN = b.ID_PELAYANAN 
        INNER JOIN pendaftaran c ON b.ID_PENDAFTARAN = c.ID_PENDAFTARAN 
        INNER JOIN admin d ON c.ID_ADMIN = d.ID_ADMIN 
        INNER JOIN pasien e ON c.ID_PASIEN = e.ID_PASIEN WHERE ID_TRANSAKSI =' . $id);
        $results = $query->getResultArray();
        // dd($results);
        $data = [
            'validation' => \Config\Services::validation(),
            'laporan' => $results,

        ];
        // dd($data);
        return view('Admin/FormAdmin/cetak_kwitansi', $data);
    }
    public function cetak_laporan()
    {
        // dd($id);
        $db = \Config\Database::connect();
        $query = $db->query('SELECT *,SUM(TOTAL_BIAYA_TRANSAKSI) AS TOTAL FROM transaksi a
        INNER JOIN pelayanan b ON a.ID_PELAYANAN = b.ID_PELAYANAN  
        INNER JOIN pendaftaran c ON b.ID_PENDAFTARAN = c.ID_PENDAFTARAN 
        INNER JOIN admin d ON c.ID_ADMIN = d.ID_ADMIN 
        INNER JOIN pasien e ON c.ID_PASIEN = e.ID_PASIEN');
        $results = $query->getResultArray();
        // dd($results);

        $data = [
            'validation' => \Config\Services::validation(),
            'laporan' => $results,

        ];
        // dd($data);
        return view('Admin/FormAdmin/cetak_laporan', $data);
    }
    public function cetak_rujukan($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM asesmen a
        INNER JOIN pelayanan b ON a.ID_PELAYANAN = b.ID_PELAYANAN 
        INNER JOIN pendaftaran c ON b.ID_PENDAFTARAN = c.ID_PENDAFTARAN 
        INNER JOIN admin d ON c.ID_ADMIN = d.ID_ADMIN 
        INNER JOIN pasien e ON c.ID_PASIEN = e.ID_PASIEN
        INNER JOIN diagnosa f ON a.ID_ASESMEN = f.ID_ASESMEN
        INNER JOIN rujuk g ON a.ID_ASESMEN = g.ID_ASESMEN 
        INNER JOIN dokter h ON c.ID_DOKTER = h.ID_DOKTER
        WHERE ID_RUJUK =' . $id);
        $results = $query->getResultArray();
        // dd($results);
        $data = [
            'validation' => \Config\Services::validation(),
            'rujukan' => $results,

        ];
        // dd($data);
        return view('Admin/FormAdmin/cetak_rujukan', $data);
    }

    public function update_pasien($id)
    {
        $this->PasienModel->save([
            'ID_PASIEN' => $id,
            'NO_RM' => $this->request->getVar('no_rm'),
            'NO_KTP' => $this->request->getVar('no_ktp'),
            'NAMA_PASIEN' => $this->request->getVar('nama_pasien'),
            'JENIS_KELAMIN' => $this->request->getVar('jenis_kelamin'),
            'UMUR' => $this->request->getVar('umur'),
            'KELURAHAN' => $this->request->getVar('kelurahan'),
            'KECAMATAN' => $this->request->getVar('kecamatan'),
            'KOTA' => $this->request->getVar('kota'),
            'PROVINSI' => $this->request->getVar('provinsi'),
            'TELFON_PASIEN' => $this->request->getVar('telfon_pasien'),
            'ALAMAT_PASIEN' => $this->request->getVar('alamat'),
            'TEMPAT_LAHIR' => $this->request->getVar('tempat_lahir'),
            'TANGGAL_LAHIR' => $this->request->getVar('tanggal_lahir')

        ]);
        session()->setFlashdata('Info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('pasienAdmin'));
    }



    public function surat_rujukan()
    {
        $data = [];
        return view('Admin/FormAdmin/surat_rujukan');
    }

    public function save_pendaftaran()
    {
        // dd($this->request->getVar());
        $this->PendaftaranModel->save([
            'ID_ADMIN' => $this->request->getVar('id_admin'),
            'ID_PASIEN' => $this->request->getVar('id_pasien'),
            'ID_DOKTER' => $this->request->getVar('id_dokter'),
            'NOMER_ANTRIAN' => $this->request->getVar('no_antrian'),
            'DARURAT' => $this->request->getVar('darurat'),
            'BIAYA_ADMINISTRASI' => $this->request->getVar('biaya_admin')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('pendaftaran')->withInput();
    }
    public function save_jadwal()
    {
        $this->JadwalModel->save([
            'HARI' => $this->request->getVar('hari'),
            'JAM' => $this->request->getVar('jam'),
            'POLI' => $this->request->getVar('poli'),
        ]);

        session()->setFlashdata('Info', 'Jadwal Berhasil Ditambahkan');
        return redirect()->to('tambahDokter')->withInput();
    }

    public function save_dokter()
    {
        //VALIDASI
        if (!$this->validate([
            'nama_dokter' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto_dokter' => [
                'rules' => 'max_size[foto_dokter,2048]|is_image[foto_dokter]|mime_in[foto_dokter,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('tambahDokter')->withInput();
        }
        // ambil gambar
        $fotoDokter = $this->request->getFile('foto_dokter');
        //apakah tidak ada gambar yang di upload
        if ($fotoDokter->getError() == 4) {
            $namaDokter = 'dokter.jpg';
        } else {
            // generate nama random
            $namaDokter = $fotoDokter->getRandomName();
            // pindahkan file ke folder
            $fotoDokter->move('assets/img/foto', $namaDokter);
        }
        $this->DokterModel->save([
            'FOTO_DOKTER' => $namaDokter,
            'NAMA_DOKTER' => $this->request->getVar('nama_dokter'),
            'STATUS_DOKTER' => $this->request->getVar('status_dokter'),
            'EMAIL_DOKTER' => $this->request->getVar('email_dokter'),
            'PASSWORD_DOKTER' => $this->request->getVar('password_dokter'),
            'ID_JADWAL' => $this->request->getVar('jadwal'),
            'AKTIF' => $this->request->getVar('aktif')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('dokterAdmin');
    }

    public function tambah_dokter()
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'jadwal' => $this->JadwalModel->getJadwal()
        ];
        return view('Admin/FormAdmin/tambah_dokter', $data);
    }

    public function hapus_dokter($id)
    {
        //cari gambar berdasarkan id
        $dokter = $this->DokterModel->find($id);
        // cek jika foto default 
        if ($dokter['FOTO_DOKTER'] != 'dokter.jpg') {
            //hapus gambar
            unlink('assets/img/foto/' . $dokter['FOTO_DOKTER']);
        }

        $this->DokterModel->delete($id);
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('dokterAdmin'));
    }

    public function edit_Dokter($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'dokter' => $this->DokterModel->getDokter($id),
            'jadwal' => $this->JadwalModel->getJadwal()
        ];
        return view('Admin/FormAdmin/edit_dokter', $data);
    }

    public function update_dokter($id)
    {
        //VALIDASI
        if (!$this->validate([
            'foto_dokter' => [
                'rules' => 'max_size[foto_dokter,2048]|is_image[foto_dokter]|mime_in[foto_dokter,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to(base_url('edit_dokter/' . $id))->withInput();
        }
        // ambil gambar
        $fotoDokter = $this->request->getFile('foto_dokter');
        //apakah tidak ada gambar yang di upload
        if ($fotoDokter->getError() == 4) {
            $namaDokter = 'dokter.jpg';
        } else {
            // generate nama random
            $namaDokter = $fotoDokter->getRandomName();
            // pindahkan file ke folder
            $fotoDokter->move('assets/img/foto', $namaDokter);
        }
        $this->DokterModel->save([
            'ID_DOKTER' => $id,
            'FOTO_DOKTER' => $namaDokter,
            'NAMA_DOKTER' => $this->request->getVar('nama_dokter'),
            'STATUS_DOKTER' => $this->request->getVar('status_dokter'),
            'EMAIL_DOKTER' => $this->request->getVar('email_dokter'),
            'PASSWORD_DOKTER' => $this->request->getVar('password_dokter'),
            'ID_JADWAL' => $this->request->getVar('jadwal'),
            'AKTIF' => $this->request->getVar('aktif')
        ]);
        session()->setFlashdata('Info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('dokterAdmin'));
    }

    public function save_admin()
    {
        //VALIDASI
        if (!$this->validate([
            'nama_admin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Admin Harus diisi'
                ]
            ],
            'foto_admin' => [
                'rules' => 'max_size[foto_admin,2048]|is_image[foto_admin]|mime_in[foto_admin,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('tambahAdmin')->withInput();
        }
        // ambil gambar
        $fotoAdmin = $this->request->getFile('foto_admin');
        //apakah tidak ada gambar yang di upload
        if ($fotoAdmin->getError() == 4) {
            $namaAdmin = 'admin.jpg';
        } else {
            // generate nama random
            $namaAdmin = $fotoAdmin->getRandomName();
            // pindahkan file ke folder
            $fotoAdmin->move('assets/img/foto', $namaAdmin);
        }

        $this->AdminModel->save([
            'FOTO_ADMIN' => $namaAdmin,
            'NAMA_ADMIN' => $this->request->getVar('nama_admin'),
            'STATUS_ADMIN' => $this->request->getVar('status_admin'),
            'EMAIL_ADMIN' => $this->request->getVar('email_admin'),
            'PASSWORD_ADMIN' => $this->request->getVar('password_admin'),
            'AKTIF' => $this->request->getVar('aktif')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('adminAdmin');
    }


    public function tambah_admin()
    {
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/FormAdmin/tambah_admin', $data);
    }

    public function hapus_admin($id)
    {
        //cari gambar berdasarkan id
        $admin = $this->AdminModel->find($id);
        // cek jika foto default 
        if ($admin['FOTO_ADMIN'] != 'admin.jpg') {
            //hapus gambar
            unlink('assets/img/foto/' . $admin['FOTO_ADMIN']);
        }


        $this->AdminModel->delete($id);
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('adminAdmin'));
    }

    public function edit_admin($id)
    {
        // $user = $this->AdminModel->getUser($id);
        $data = [
            'validation' => \Config\Services::validation(),
            'admin' => $this->AdminModel->getAdmin($id)
        ];
        return view('Admin/FormAdmin/edit_admin', $data);
    }

    public function update_admin($id)
    {
        //VALIDASI
        if (!$this->validate([
            'foto_admin' => [
                'rules' => 'max_size[foto_admin,2048]|is_image[foto_admin]|mime_in[foto_admin,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to(base_url('edit_admin/' . $id))->withInput();
        }

        $fotoAdmin = $this->request->getFile('foto_admin');
        //apakah tidak ada gambar yang di upload
        if ($fotoAdmin->getError() == 4) {
            $namaAdmin = 'admin.jpg';
        } else {
            // generate nama random
            $namaAdmin = $fotoAdmin->getRandomName();
            // pindahkan file ke folder
            $fotoAdmin->move('assets/img/foto', $namaAdmin);
            $aktif = $this->request->getVar('aktif');
            if ($aktif == null) {
                $aktif = 0;
            } else {
                $aktif = 1;
            }
        }

        $this->AdminModel->save([
            'ID_ADMIN' => $id,
            'FOTO_ADMIN' => $namaAdmin,
            'NAMA_ADMIN' => $this->request->getVar('nama_admin'),
            'STATUS_ADMIN' => $this->request->getVar('status_admin'),
            'EMAIL_ADMIN' => $this->request->getVar('email_admin'),
            'PASSWORD_ADMIN' => $this->request->getVar('password_admin'),
            'AKTIF' => $aktif
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('adminAdmin'));
    }

    public function pembayaran()
    {
        $data = [
            'laporan' => $this->LaporanModel->getLaporan(),
            'pasien' => $this->PasienModel->getPasien(),
            'pendaftaran' => $this->PendaftaranModel->getPendaftaran()
        ];
        // dd($data);
        return view('Admin/FormAdmin/pembayaran', $data);
    }

    public function save_pembayaran($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM 
        pelayanan b  
        INNER JOIN pendaftaran c ON b.ID_PENDAFTARAN = c.ID_PENDAFTARAN 
        INNER JOIN admin d ON c.ID_ADMIN = d.ID_ADMIN 
        INNER JOIN pasien e ON c.ID_PASIEN = e.ID_PASIEN WHERE ID_PELAYANAN =' . $id);
        $results = $query->getResultArray();
        // dd($results);
        foreach ($results as $row) {
            $id_pelayanan = $row['ID_PELAYANAN'];
            $id_admin = $row['ID_ADMIN'];
            $total_biaya = $row['TOTAL_BIAYA_RESEP'] + $row['BIAYA_PELAYANAN'] + $row['BIAYA_ADMINISTRASI'];
        }
        $this->LaporanModel->save([
            'ID_PELAYANAN' => $id_pelayanan,
            'ID_ADMIN' => $id_admin,
            'TOTAL_BIAYA_TRANSAKSI' => $total_biaya
        ]);
        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('laporanAdmin'));
    }

    public function hapus_laporan($id)
    {
        $this->LaporanModel->delete($id);
        session()->setFlashdata('Info', 'Data berhasil dihapus.');
        return redirect()->to(base_url('laporanAdmin'));
    }


    public function logout()
    {
        $data = [];
        return view('Home/index');
    }
}
