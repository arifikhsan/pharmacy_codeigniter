<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DrugModel;
use App\Models\SupplierModel;
use App\Models\TransactionModel;
use Config\Database;
use DateTime;

class Transactions extends BaseController
{
  public function index()
  {
    $transaction = new TransactionModel();

    return view('transactions/index', ['transactions' => $transaction->getAll()]);
  }

  function add()
  {
    $supplier = new SupplierModel();
    $suppliers = $supplier->asObject()->findAll();

    $drug = new DrugModel();
    $drugs = $drug->asObject()->findAll();

    return view('transactions/add', ['suppliers' => $suppliers, 'drugs' => $drugs]);
  }

  function insert()
  {
    $supplier_id = intval($this->request->getPost('supplier_id'));
    $drug_id = intval($this->request->getPost('drug_id'));
    $type = $this->request->getPost('type');
    $quantity = intval($this->request->getPost('quantity'));
    $price = intval($this->request->getPost('price'));
    $datetime = $this->request->getPost('datetime');

    $transaction = new TransactionModel();
    $transaction->insert([
      'supplier_id' => $supplier_id,
      'drug_id' => $drug_id,
      'type' => $type,
      'quantity' => $quantity,
      'price' => $price,
      'datetime' => $datetime,
    ]);

    return redirect()->to('/transactions');
  }

  function edit($id)
  {
    $supplier = new SupplierModel();
    $suppliers = $supplier->asObject()->findAll();

    $drug = new DrugModel();
    $drugs = $drug->asObject()->findAll();

    $transaction = new TransactionModel();
    $transaction = $transaction->asObject()->find(intval($id));

    $datetime = new DateTime($transaction->datetime);

    return view('transactions/edit', [
      'transaction' => $transaction,
      'suppliers' => $suppliers,
      'drugs' => $drugs,
      'datetime' => $datetime,
    ]);
  }

  function update($id)
  {
    $newTransaction = [
      'supplier_id' => intval($this->request->getPost('supplier_id')),
      'drug_id' => intval($this->request->getPost('drug_id')),
      'type' => $this->request->getPost('type'),
      'quantity' => intval($this->request->getPost('quantity')),
      'price' => intval($this->request->getPost('price')),
      'datetime' => $this->request->getPost('datetime'),
    ];

    $transaction = new TransactionModel();
    $transaction = $transaction->update(intval($id), $newTransaction);

    return redirect()->to('/transactions');
  }

  function delete($id)
  {
    $transaction = new TransactionModel();
    $transaction->delete(intval($id));

    return redirect()->to('/transactions');
  }
}
