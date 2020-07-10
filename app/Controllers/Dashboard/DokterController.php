<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class DokterController extends BaseController
{
    public function index()
    {
        return view('Tables/dokter');
    }

    //--------------------------------------------------------------------

}
