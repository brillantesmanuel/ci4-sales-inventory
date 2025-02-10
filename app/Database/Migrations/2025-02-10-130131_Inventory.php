<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventory extends Migration
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
            'item_id' => [
                'type' => 'TEXT'
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'sold_qty' => [
                'type' => 'BIGINT',
                'constraint' => 20
            ],
            'remaining_stock' => [
                'type' => 'BIGINT',
                'constraint' => 20
            ],
            'remaining_threshold' => [
                'type' => 'BIGINT',
                'constraint' => 20
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
        $this->forge->createTable('inventories');
    }

    public function down()
    {
        //
        $this->forge->dropTable('inventories');
    }
}
