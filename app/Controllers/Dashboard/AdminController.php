<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;


class AdminController extends BaseController
{
    public function index()
    {
        return view('Dashboard/admin');
    }

    public function pasien()
    {
        return view('Tables/pasien');
    }

}
