<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SupplierSeeder extends Seeder
{
  public function run()
  {
    $supplier = model('SupplierModel');
    for ($i = 0; $i < 5; $i++) {
      $supplier->insert([
        'name' => static::faker()->name,
        'address' => static::faker()->address,
      ]);
    }
  }
}
