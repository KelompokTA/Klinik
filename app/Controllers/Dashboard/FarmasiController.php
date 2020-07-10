<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class FarmasiController extends BaseController
{
    public function index()
    {
        return view('Tables/farmasi');
    }

    //--------------------------------------------------------------------

}
