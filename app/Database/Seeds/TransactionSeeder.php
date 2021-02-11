<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionSeeder extends Seeder
{
  public function run()
  {
    $transaction = model('TransactionModel');
    for ($i = 0; $i < 5; $i++) {
      $transaction->insert([
        'supplier_id' => static::faker()->numberBetween(1, 3),
        'drug_id' => static::faker()->numberBetween(1, 3),
        'type' => 'buy',
        'quantity' => static::faker()->numberBetween(1, 10),
        'price' => static::faker()->numberBetween(1, 10) * 1000,
        'datetime' => static::faker()->dateTime()->format('Y-m-d\TH:i:s'),
      ]);
    }
  }
}
