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
}
