<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TiketModel;

class Gate extends BaseController
{
    public function index()
    {
        $kode = $this->request->getGet('kode');
        $data['title'] = 'Gate';
        $model = new TiketModel();
        $tiket = $model->getTiket($kode);
        $data['tiket'] = $tiket;
        $data['kode'] = $kode;

        return view('gate', $data);
    }

    public function checkIn()
    {
        $tiket_id = $this->request->getPost('tiket_id');
        $model = new TiketModel();
        $model->update($tiket_id, ['tiket_gate' => 1]);
        return redirect()->to(previous_url())->with('success', 'Berhasil Checkin');
    }

    public function checked()
    {
        $model = new TiketModel();
        $tikets = $model->getChecked();

        $data = [
            'title' => 'Checked',
            'tikets' => $tikets
        ];

        return view('tiket-checked', $data);
    }
}
