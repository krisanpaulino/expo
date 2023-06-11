<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createtabletiket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tiket_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'order_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'tiket_kode' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ],
            'tiket_gate' => [
                'type' => 'INT',
                'constraint' => 1
            ]
        ]);
        $this->forge->addPrimaryKey('tiket_id');
        $this->forge->addForeignKey('order_id', 'order', 'order_id', 'cascade', 'cascade');
        $this->forge->createTable('tiket');
    }

    public function down()
    {
        $this->forge->dropTable('tiket');
    }
}
