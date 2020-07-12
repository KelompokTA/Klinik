<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;


class AdminController extends BaseController
{
    public function index()
    {
        return view('Admin/adminDashboard');
    }

    public function pasien()
    {
        return view('Admin/TablesAdmin/pasien');
    }

    public function dokter()
    {
        return view('Admin/TablesAdmin/dokter');
    }

    public function obat()
    {
        return view('Admin/TablesAdmin/obat');
    }

    public function admin()
    {
        return view('Admin/TablesAdmin/admin');
    }

    public function laporan()
    {
        return view('Admin/TablesAdmin/laporan');
    }

    public function tambah_pasien()
    {
        return view('Admin/FormAdmin/tambah_pasien');
    }

    public function surat_rujukan()
    {
        return view('Admin/FormAdmin/surat_rujukan');
    }

    public function tambah_dokter()
    {
        return view('Admin/FormAdmin/tambah_dokter');
    }

    public function tambah_admin()
    {
        return view('Admin/FormAdmin/tambah_admin');
    }

    public function pembayaran()
    {
        return view('Admin/FormAdmin/pembayaran');
    }

    public function pendaftaran()
    {
        return view('Admin/FormAdmin/pendaftaran');
    }

    public function logout()
    {
        return view('Home/index');
    }
}
