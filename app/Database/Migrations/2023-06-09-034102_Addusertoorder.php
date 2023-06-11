<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addusertoorder extends Migration
{
    public function up()
    {
        $this->forge->addColumn('order', [
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
