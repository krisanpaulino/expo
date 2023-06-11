<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tiket';
    protected $primaryKey       = 'tiket_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'order_id',
        'tiket_kode',
        'tiket_gate',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'order_id' => 'required',
        'tiket_kode' => 'required',
        'tiket_gate' => 'required',
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

    public function getTiket($kode = null)
    {
        if ($kode != null) {
            $this->join('order', 'order.order_id = tiket.order_id');
            $this->where('tiket_kode', $kode);
            // $this->where('tiket_gate', 0);
            return $this->first();
        }
        return null;
    }
    public function getChecked()
    {
        $this->where('tiket_gate', 1);
        return $this->first();
    }

    public function byOrder($order_id)
    {
        $this->where('order_id', $order_id);
        return $this->find();
    }
}
