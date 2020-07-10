<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class LaporanController extends BaseController
{
    public function index()
    {
        return view('Tables/laporan');
    }

    //--------------------------------------------------------------------

}
