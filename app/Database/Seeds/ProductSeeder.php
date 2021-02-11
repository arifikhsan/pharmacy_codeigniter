<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
  public function run()
  {
    $product = model('ProductModel');
    $product->insert([
      'name' => static::faker()->word,
      'price' => static::faker()->randomDigit,
    ]);
  }
}
