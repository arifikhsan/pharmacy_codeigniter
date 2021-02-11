<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Pharmacy Stock Management
    </h1>
  </div>
  <div class="row mt-4">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Drug</h5>
          <p class="card-text">Drug collection.</p>
          <a href="/drugs" class="btn btn-primary">Go to drugs</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Supplier</h5>
          <p class="card-text">Supplier collection.</p>
          <a href="#" class="btn btn-primary">Go to supplier</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Transaction</h5>
          <p class="card-text">Transaction collection.</p>
          <a href="#" class="btn btn-primary">Go to transaction</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
