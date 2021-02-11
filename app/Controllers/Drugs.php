<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DrugModel;

class Drugs extends BaseController
{
  public function index()
  {
    $drug = new DrugModel();
    $drugs = $drug->asObject()->findAll();

    return view('drugs/index', ['drugs' => $drugs]);
  }

  function add()
  {
    return view('drugs/add');
  }

  function insert()
  {
    $name = $this->request->getPost('name');
    $price = intval($this->request->getPost('price'));

    $drug = new DrugModel();
    $drug->insert(['name' => $name, 'price' => $price]);

    return redirect()->to('/drugs');
  }

  function edit($id)
  {
    $drug = new DrugModel();
    $drug = $drug->asObject()->find(intval($id));

    return view('drugs/edit', ['drug' => $drug]);
  }

  function update($id)
  {
    $newDrugs = [
      'name' => $this->request->getPost('name'),
      'price' => intval($this->request->getPost('price')),
    ];

    $drug = new DrugModel();
    $drug = $drug->update(intval($id), $newDrugs);

    return redirect()->to('/drugs');
  }

  function delete($id)
  {
    $drug = new DrugModel();
    $drug->delete(intval($id));

    return redirect()->to('/drugs');
  }
}
