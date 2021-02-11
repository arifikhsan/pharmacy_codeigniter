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

  function insert() {
    $name = $this->request->getPost('name');
    $price = intval($this->request->getPost('price'));

    $product = new ProductModel();
    $product->insert_product($name, $price);
    return $this->index();
  }
}
