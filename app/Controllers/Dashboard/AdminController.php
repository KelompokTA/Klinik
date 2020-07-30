<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PasienModel;
use App\Models\DokterModel;
use App\Models\AdminModel;
use App\Models\JadwalModel;
use App\Models\WilayahModel;
use App\Models\LaporanModel;


class AdminController extends BaseController
{
    protected $PasienModel;
    protected $DokternModel;
    protected $AdminModel;
    protected $JadwalModel;
    protected $WilayahModel;
    protected $LaporanModel;
    public function __construct()
    {
        $this->PasienModel = new PasienModel();
        $this->DokterModel = new DokterModel();
        $this->AdminModel = new AdminModel();
        $this->JadwalModel = new JadwalModel();
        $this->WilayahModel = new WilayahModel();
        $this->LaporanModel = new LaporanModel();
    }

    public function index()
    {
        $data = [];
        return view('Admin/adminDashboard');
    }

    public function pasien()
    {
        $pasien = $this->PasienModel->findAll();
        $data = [
            'pasien' => $pasien,
            'wilayah' => $this->WilayahModel->get_wilayah()

        ];
        return view('Admin/TablesAdmin/pasien', $data);
    }

    public function dokter()
    {
        $data = [
            'dokter' => $this->DokterModel->getDokter()
        ];
        return view('Admin/TablesAdmin/dokter', $data);
    }

    public function admin()
    {
        // $admin = $this->AdminModel->findAll();
        $data = [
            'admin' => $this->AdminModel->getAdmin()
        ];
        return view('Admin/TablesAdmin/admin', $data);
    }

    public function laporan()
    {
        $data = [
            'laporan' => $this->LaporanModel->getLaporan()
        ];
        return view('Admin/TablesAdmin/laporan', $data);
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
        // session();
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
            'pasien' => $this->PasienModel->getPasien($id),
            'wilayah' => $this->WilayahModel->get_wilayah()
        ];
        return view('Admin/FormAdmin/edit_pasien', $data);
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
            $validation = \Config\Services::validation();
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
            'ID_JADWAL' => $this->request->getVar('jadwal')
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
            'ID_JADWAL' => $this->request->getVar('jadwal')
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
            'PASSWORD_ADMIN' => $this->request->getVar('password_admin')
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
        }

        $this->AdminModel->save([
            'ID_ADMIN' => $id,
            'FOTO_ADMIN' => $namaAdmin,
            'NAMA_ADMIN' => $this->request->getVar('nama_admin'),
            'STATUS_ADMIN' => $this->request->getVar('status_admin'),
            'EMAIL_ADMIN' => $this->request->getVar('email_admin'),
            'PASSWORD_ADMIN' => $this->request->getVar('password_admin')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('adminAdmin'));
    }

    public function pembayaran()
    {
        $data = [];
        return view('Admin/FormAdmin/pembayaran');
    }

    public function pendaftaran()
    {
        $data = [];
        return view('Admin/FormAdmin/pendaftaran');
    }

    public function logout()
    {
        $data = [];
        return view('Home/index');
    }
}
