<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\TiketModel;

class Order extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        $user_id = null;
        if (session('user')->type == 'operator')
            $user_id = session('user')->user_id;
        $orders = $model->findOrder($user_id);
        $data = [
            'title' => 'Data Order',
            'orders' => $orders
        ];

        return view('order-index', $data);
    }
    public function orderPage()
    {
        $data['title'] = 'Pesan Tiket';
        return view('order-page', $data);
    }

    public function order()
    {
        helper('tiket');
        $jumlah = $this->request->getPost('jumlah');

        $data = [
            'order_hp' => $this->request->getPost('order_hp'),
            'order_status' => $this->request->getPost('order_status'),
            'user_id' => session('user')->user_id,
            'order_nama' => $this->request->getPost('order_nama')
        ];

        $model = new OrderModel();
        if ($order_id = $model->insert($data, true)) {
            for ($i = 0; $i < $jumlah; $i++) {
                $tiket = [
                    'order_id' => $order_id,
                    'tiket_kode' => generateKodeBooking($order_id),
                    'tiket_gate' => 0,
                ];
                $model = new TiketModel();
                $model->insert($tiket);
            }
            return redirect()->to('order/' . $order_id)->with('success', 'Order berhasil!');
        }

        return redirect()->to(previous_url())->with('errors', $model->errors())->withInput();
    }
    public function detail($order_id)
    {
        $model = new OrderModel();
        $order = $model->find($order_id);

        $model = new TiketModel();
        $tiket = $model->byOrder($order_id);

        $data = [
            'title' => 'Detail Tiket',
            'order' => $order,
            'tiket' => $tiket
        ];

        return view('order-detail', $data);
    }
}
