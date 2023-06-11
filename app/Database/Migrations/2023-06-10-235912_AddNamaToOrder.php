<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNamaToOrder extends Migration
{
    public function up()
    {
        $this->forge->addColumn('order', [
            'order_nama' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
