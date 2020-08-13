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

        if ($cek[0]) {

            if (($cek[0]['EMAIL_ADMIN'] == $email) && ($cek[0]['PASSWORD_ADMIN'] == $password)) {
                session()->set('ID_ADMIN', $cek[0]['ID_ADMIN']);
                session()->set('NAMA_ADMIN', $cek[0]['NAMA_ADMIN']);
                session()->set('STATUS_ADMIN', $cek[0]['STATUS_ADMIN']);
                session()->set('FOTO_ADMIN', $cek[0]['FOTO_ADMIN']);
                return redirect()->to(base_url('admin'));
            }
            session()->setFlashdata('Info', 'Login Gagal');
            return redirect()->to(base_url('login'));
        } elseif ($cek[1]) {

            if (($cek[1]['EMAIL_DOKTER'] == $email) && ($cek[1]['PASSWORD_DOKTER'] == $password)) {
                session()->set('ID_DOKTER', $cek[1]['ID_DOKTER']);
                session()->set('NAMA_DOKTER', $cek[1]['NAMA_DOKTER']);
                session()->set('STATUS_DOKTER', $cek[1]['STATUS_DOKTER']);
                session()->set('FOTO_ADMIN', $cek[1]['FOTO_DOKTER']);
                return redirect()->to(base_url('dokter'));
            }
            session()->setFlashdata('Info', 'Login Gagal');
            return redirect()->to(base_url('login'));
        }

        session()->setFlashdata('Info', 'Login Gagal');
        return redirect()->to(base_url('login'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    //--------------------------------------------------------------------

}
