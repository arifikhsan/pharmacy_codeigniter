<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Products extends BaseController
{
	public function index()
	{
    $product = new ProductModel();
		$products = $product->get_products();
    return view('products/index', ['products' => $products]);
	}

  function add() {
    return view('products/add');
  }

  function edit($id) {
    $product = new ProductModel();
    $product = $product->asObject()->find(intval($id));

    return view('products/edit', ['product' => $product]);
  }

  function insert() {
    $name = $this->request->getPost('name');
    $price = intval($this->request->getPost('price'));

    $product = new ProductModel();
    $product->insert_product($name, $price);
    return redirect()->to('/products');
  }

  function update($id) {
    $newProduct = [
      'name' => $this->request->getPost('name'),
      'price' => intval($this->request->getPost('price')),
    ];

    $product = new ProductModel();
    $product = $product->update(intval($id), $newProduct);

    $session = session();
    $session->setFlashdata('item', 'value');
    return redirect()->to('/products');
  }

  function delete($id) {
    $product = new ProductModel();
    $product->delete(intval($id));
    return redirect()->to('/products');
  }
}
