<?php

namespace App\Controllers;

use App\Models\LoginAdminModel;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        return view('Login/index');
    }

    public function login_proses()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $this->LoginModel->cek_login($email, $password);
        // dd($cek);
        if ($cek == null) {
            session()->setFlashdata('Info', 'Login Gagal');
            return redirect()->to(base_url('login'));
        } elseif (($cek['EMAIL_ADMIN'] == $email) && ($cek['PASSWORD_ADMIN'] == $password)) {
            session()->set('NAMA_ADMIN', $cek['NAMA_ADMIN']);
            session()->set('STATUS_ADMIN', $cek['STATUS_ADMIN']);
            return redirect()->to(base_url('admin'));
        } else {
            session()->setFlashdata('Info', 'Login Gagal');
            return redirect()->to(base_url('login'));
        }
    }

    //--------------------------------------------------------------------

}
