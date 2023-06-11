<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->has('user')) {
            return redirect()->to(session()->get('user')->user_type);
        }
        return view('login');
    }
    public function login()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->getLoginData($username);
        // dd($user->user_password);
        if ($user == null) {
            return redirect()->to(previous_url())
                ->with('danger', 'Username tidak ditemukan!');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->to(previous_url())
                ->with('danger', 'Password Salah!');
        }

        switch ($user->type) {
            case 'admin':
                $data = [
                    'admin_logged_in' => 1,
                    'user' => $user
                ];
                break;

            case 'operator':
                $data = [
                    'operator_logged_in' => 1,
                    'user' => $user
                ];
                break;
            default:
                $data = [];
                break;
        }
        session()->set($data);
        return redirect('/');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
