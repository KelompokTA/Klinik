<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class PasienController extends BaseController
{
    public function index()
    {
        return view('Tables/pasien');
    }

    //--------------------------------------------------------------------

}
