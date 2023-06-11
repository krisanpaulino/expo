<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNamalengkap extends Migration
{
    public function up()
    {
        $this->forge->addColumn('user', [
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
