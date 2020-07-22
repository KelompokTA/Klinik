<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
<<<<<<< HEAD
use App\Models\UserModel;

class AdminController extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new UserModel();
    }


=======
use App\Models\PasienModel;
use App\Models\DokterModel;
use App\Models\AdminModel;


class AdminController extends BaseController
{
    protected $PasienModel;
    protected $DokternModel;
    protected $AdminModel;
    public function __construct()
    {
        $this->PasienModel = new PasienModel();
        $this->DokterModel = new DokterModel();
        $this->AdminModel = new AdminModel();
    }

>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
    public function index()
    {
        $data = [];
        return view('Admin/adminDashboard');
    }

    public function pasien()
    {
<<<<<<< HEAD
        $data = [];
        return view('Admin/TablesAdmin/pasien');
=======
        $pasien = $this->PasienModel->findAll();
        $data = [
            'pasien' => $pasien
        ];
        return view('Admin/TablesAdmin/pasien', $data);
>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
    }

    public function dokter()
    {
<<<<<<< HEAD
        $data = [];
        return view('Admin/TablesAdmin/dokter');
=======
        $dokter = $this->DokterModel->findAll();
        $data = [
            'dokter' => $dokter
        ];
        return view('Admin/TablesAdmin/dokter', $data);
>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
    }

    public function admin()
    {
<<<<<<< HEAD
        $admin = $this->adminModel->findAll();
        $data = [
            'admin' => $admin
        ];


=======
        $admin = $this->AdminModel->findAll();
        $data = [
            'admin' => $admin
        ];
>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
        return view('Admin/TablesAdmin/admin', $data);
    }

    public function laporan()
    {
        $data = [];
        return view('Admin/TablesAdmin/laporan');
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
<<<<<<< HEAD
        $data = [];
        return view('Admin/FormAdmin/tambah_pasien');
=======
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/FormAdmin/tambah_pasien', $data);
>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
    }

    public function surat_rujukan()
    {
        $data = [];
        return view('Admin/FormAdmin/surat_rujukan');
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
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('tambahDokter')->withInput()->with('validation', $validation);
        }
        $this->DokterModel->save([
            'FOTO_DOKTER' => $this->request->getVar('foto_dokter'),
            'NAMA_DOKTER' => $this->request->getVar('nama_dokter'),
            'STATUS_DOKTER' => $this->request->getVar('status_dokter'),
            'USERNAME_DOKTER' => $this->request->getVar('username_dokter'),
            'PASSWORD_DOKTER' => $this->request->getVar('password_dokter'),
            'ID_JADWAL' => $this->request->getVar('id_jadwal')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('dokterAdmin');
    }

    public function tambah_dokter()
    {
<<<<<<< HEAD
        $data = [];
        return view('Admin/FormAdmin/tambah_dokter');
=======
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/FormAdmin/tambah_dokter', $data);
    }

    public function save_admin()
    {
        //VALIDASI
        if (!$this->validate([
            'nama_admin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('tambahAdmin')->withInput()->with('validation', $validation);
        }
        $this->AdminModel->save([
            'FOTO_USER' => $this->request->getVar('foto_admin'),
            'NAMA_USER' => $this->request->getVar('nama_admin'),
            'STATUS_USER' => $this->request->getVar('status_admin'),
            'USERNAME_USER' => $this->request->getVar('username_admin'),
            'PASSWORD_USER' => $this->request->getVar('password_admin')
        ]);

        session()->setFlashdata('Info', 'Data Berhasil Ditambahkan');
        return redirect()->to('adminAdmin');
>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
    }

    public function tambah_admin()
    {
<<<<<<< HEAD
        $data = [];
        return view('Admin/FormAdmin/tambah_admin');
=======
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/FormAdmin/tambah_admin', $data);
>>>>>>> f608282ddd51fdf03041fdfbc723a578b6dfde2d
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
