<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'order';
    protected $primaryKey       = 'order_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'order_hp',
        'order_tgl',
        'order_status',
        'user_id',
        'order_nama'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'order_hp' => 'required',
        'order_status' => 'required',
        'user_id' => 'required',
        'order_nama' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function findOrder($user_id)
    {
        $this->select('order.*, COUNT(tiket.tiket_id) as jumlah', true);
        $this->join('tiket', 'tiket.order_id = order.order_id');
        if ($user_id != null)
            $this->where('user_id', $user_id);
        $this->groupBy('order.order_id');
        // dd($this->builder()->getCompiledSelect());
        return $this->find();
    }
}
