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

    public function cek_login()
    {
        $email = $this->request->getPost('EMAIL');
        $password = $this->request->getPost('PASSWORD');

        $cek = $this->LoginModel->cek_login($email, $password);


        if (($cek['EMAIL'] == $email) && ($cek['PASSWORD'] == $password)) {
            session()->set('EMAIL', $cek['EMAIL']);
            session()->set('STATUS', $cek['STATUS']);

            return redirect()->to(base_url('admin'));
        } else {
            session()->setFlashdata('gagal', 'Email atau Password Salah !!!');
            return redirect()->to(base_url('login'));
        }
    }

    //--------------------------------------------------------------------

}
