<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		// $this->call('ProductSeeder');
		$this->call('DrugSeeder');
		$this->call('SupplierSeeder');
		$this->call('TransactionSeeder');
	}
}
