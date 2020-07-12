<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class DokterController extends BaseController
{
    public function index()
    {
        return view('Dokter/dokterDashboard');
    }

    public function obat()
    {
        return view('Dokter/TablesDokter/obat');
    }

    public function riwayat()
    {
        return view('Dokter/TablesDokter/riwayat');
    }

    public function tambah_obat()
    {
        return view('Dokter/FormDokter/tambah_obat');
    }

    public function tambah_pemeriksaan()
    {
        return view('Dokter/FormDokter/tambah_pemeriksaan');
    }
    

}
