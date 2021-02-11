<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProducts extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'name'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'price' => [
        'type' => 'INT',
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('products');
  }

  public function down()
  {
    //
  }
}
