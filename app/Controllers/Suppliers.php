<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Suppliers extends BaseController
{
	public function index()
  {
    $supplier = new SupplierModel();
    $suppliers = $supplier->asObject()->findAll();

    return view('suppliers/index', ['suppliers' => $suppliers]);
  }

  function add()
  {
    return view('suppliers/add');
  }

  function insert()
  {
    $name = $this->request->getPost('name');
    $address = $this->request->getPost('address');

    $supplier = new SupplierModel();
    $supplier->insert(['name' => $name, 'address' => $address]);

    return redirect()->to('/suppliers');
  }

  function edit($id)
  {
    $supplier = new SupplierModel();
    $supplier = $supplier->asObject()->find(intval($id));

    return view('suppliers/edit', ['drug' => $supplier]);
  }

  function update($id)
  {
    $newSupplier = [
      'name' => $this->request->getPost('name'),
      'address' => $this->request->getPost('address'),
    ];

    $supplier = new SupplierModel();
    $supplier = $supplier->update(intval($id), $newSupplier);

    return redirect()->to('/suppliers');
  }

  function delete($id)
  {
    $supplier = new SupplierModel();
    $supplier->delete(intval($id));

    return redirect()->to('/suppliers');
  }
}
