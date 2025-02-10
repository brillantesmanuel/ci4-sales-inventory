<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sales extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'sales_invoice' => [
                'type' => 'TEXT'
            ],
            'customer' => [
                'type' => 'TEXT'
            ],
            'address' => [
                'type' => 'TEXT'
            ],
            'tin' => [
                'type' => 'TEXT'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'order_id' => [
                'type' => 'TEXT'
            ],
            'date_order' => [
                'type' => 'DATETIME'
            ],
            'fund_transfer' => [
                'type' => 'TEXT'
            ],
            'qty' => [
                'type' => 'BIGINT',
                'constraint' => 20
            ],
            'unit' => [
                'type' => 'BIGINT',
                'constraint' => 20
            ],
            'articles' => [
                'type' => 'TEXT'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('sales');
    }

    public function down()
    {
        //
        $this->forge->dropTable('sales');
    }
}
