<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Pharmacy
    </h1>
  </div>
  <div class="row mt-4">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Medicine</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go to medicine</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Supplier</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go to supplier</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customer</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go to customer</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Transaction</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go to transaction</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
