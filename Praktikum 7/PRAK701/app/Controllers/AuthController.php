<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $model = new UserModel();
        $username = request()->getPost('username');
        $email = request()->getPost('email');
        $password = request()->getPost('password');
        $dataUser = $model->where(['username' => $username])->first();
        if($dataUser) {
            if($email == $dataUser['email']) {
                if(password_verify($password, $dataUser['password'])) {
                    session()->set([
                        "username" => $username,
                        "isLoggedIn" => true
                    ]);
                    return redirect()->to(base_url('/'));
                } else {
                    session()->setFlashdata(["pesan" => 'login gagal, password salah']);
                    return redirect()->to(base_url('/login'));
                }
            } else {
                session()->setFlashdata(["pesan" => 'login gagal, email salah']);
                return redirect()->to(base_url('/login'));
            }
        } else {
            session()->setFlashdata(["pesan" => 'login gagal, username salah']);
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }

}
