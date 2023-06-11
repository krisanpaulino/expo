<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->findAll();
        $data = [
            'title' => 'User',
            'users' => $users
        ];
        return view('user', $data);
    }

    public function registrasi()
    {
        $data = $this->request->getPost();
        $model = new UserModel();

        if ($model->insert($data)) {
            return redirect()->to(previous_url())->with('success', 'Berhasil Tambahkan User!');
        }
        return redirect()->to(previous_url())
            ->with('danger', 'Gagal')
            ->with('errors', $model->errors())
            ->withInput();
    }
}
