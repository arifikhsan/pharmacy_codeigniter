<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
  protected $DBGroup              = 'default';
  protected $table                = 'products';
  protected $primaryKey           = 'id';
  protected $useAutoIncrement     = true;
  protected $insertID             = 0;
  protected $returnType           = 'array';
  protected $useSoftDelete        = false;
  protected $protectFields        = true;
  protected $allowedFields        = ['name', 'price'];

  // Dates
  protected $useTimestamps        = false;
  protected $dateFormat           = 'datetime';
  protected $createdField         = 'created_at';
  protected $updatedField         = 'updated_at';
  protected $deletedField         = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks       = true;
  protected $beforeInsert         = [];
  protected $afterInsert          = [];
  protected $beforeUpdate         = [];
  protected $afterUpdate          = [];
  protected $beforeFind           = [];
  protected $afterFind            = [];
  protected $beforeDelete         = [];
  protected $afterDelete          = [];

  function get_products()
  {
    return $this->asObject()->findAll();
  }

  function insert_product($name, $price)
  {
    $product = [
      'name' => $name,
      'price' => $price,
    ];
    $this->insert($product);
  }

  function delete_product($id)
  {
    $this->delete($id);
  }
}
