<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Createtableorder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'order_hp' => [
                'type' => 'VARCHAR',
                'constraint' => '13'
            ],
            'order_tgl' => [
                'type' => 'DATETIME',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'order_status' => [
                'type' => 'ENUM',
                'constraint' => ['lunas', 'belum bayar']
            ]
        ]);
        $this->forge->addPrimaryKey('order_id');
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
