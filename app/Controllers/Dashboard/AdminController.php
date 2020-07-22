<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new UserModel();
    }


    public function index()
    {
        $data = [];
        return view('Admin/adminDashboard');
    }

    public function pasien()
    {
        $data = [];
        return view('Admin/TablesAdmin/pasien');
    }

    public function dokter()
    {
        $data = [];
        return view('Admin/TablesAdmin/dokter');
    }

    public function admin()
    {
        $admin = $this->adminModel->findAll();
        $data = [
            'admin' => $admin
        ];


        return view('Admin/TablesAdmin/admin', $data);
    }

    public function laporan()
    {
        $data = [];
        return view('Admin/TablesAdmin/laporan');
    }

    public function tambah_pasien()
    {
        $data = [];
        return view('Admin/FormAdmin/tambah_pasien');
    }

    public function surat_rujukan()
    {
        $data = [];
        return view('Admin/FormAdmin/surat_rujukan');
    }

    public function tambah_dokter()
    {
        $data = [];
        return view('Admin/FormAdmin/tambah_dokter');
    }

    public function tambah_admin()
    {
        $data = [];
        return view('Admin/FormAdmin/tambah_admin');
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
