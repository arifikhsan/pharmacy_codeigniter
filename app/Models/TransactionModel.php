<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
  protected $DBGroup              = 'default';
  protected $table                = 'transactions';
  protected $primaryKey           = 'id';
  protected $useAutoIncrement     = true;
  protected $insertID             = 0;
  protected $returnType           = 'array';
  protected $useSoftDelete        = false;
  protected $protectFields        = true;
  protected $allowedFields        = ['supplier_id', 'drug_id', 'type', 'quantity', 'price', 'datetime'];

  // Dates
  protected $useTimestamps        = true;
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

  function getAll()
  {
    $this->select('*');
    // $this->from('transactions');
    $this->select('drugs.id as drug_id');
    $this->select('drugs.name as drug_name');
    $this->select('suppliers.id as supplier_id');
    $this->select('suppliers.name as supplier_name');
    $this->join('drugs', 'drugs.id = transactions.drug_id');
    $this->join('suppliers', 'suppliers.id = transactions.supplier_id');
    $query = $this->get()->getResult();
    return $query;
  }
}
