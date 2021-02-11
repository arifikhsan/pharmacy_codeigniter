<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactions extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'supplier_id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
      ],
      'drug_id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
      ],
      'type'        => [
        'type'           => 'ENUM("buy","sell")',
        'default'        => 'buy',
        'null'           => false,
      ],
      'quantity'          => [
        'type'           => 'INT',
        'unsigned'       => true,
      ],
      'price'          => [
        'type'           => 'INT',
        'unsigned'       => true,
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('supplier_id', 'suppliers', 'id');
    $this->forge->addForeignKey('drug_id', 'drugs', 'id');
    $this->forge->createTable('transactions');
  }

  public function down()
  {
    $this->forge->dropTable('transactions');
  }
}
