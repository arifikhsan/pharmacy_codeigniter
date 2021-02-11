<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DrugSeeder extends Seeder
{
  public function run()
  {
    $product = model('DrugModel');

    for ($i = 0; $i < 5; $i++) {
      $product->insert([
        'name' => static::faker()->word,
        'price' => static::faker()->numberBetween(1, 10) * 100,
      ]);
    }
  }
}
