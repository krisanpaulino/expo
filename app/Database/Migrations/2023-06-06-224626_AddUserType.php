<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserType extends Migration
{
    public function up()
    {
        $this->forge->addColumn('user', [
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
