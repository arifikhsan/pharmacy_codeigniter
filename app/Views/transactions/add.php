<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Add New Transaction
    </h1>
  </div>
  <hr><br>
  <div class="col-md-6 offset-md-3">
    <form action="/transactions/insert" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Supplier</label>
        <select name="supplier_id" class="form-select">
          <?php foreach ($suppliers as $supplier) : ?>
            <option value="<?= $supplier->id; ?>"><?= $supplier->name; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Drug</label>
        <select name="drug_id" class="form-select">
          <?php foreach ($drugs as $drug) : ?>
            <option value="<?= $drug->id; ?>"><?= $drug->name; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Type</label>
        <select name="type" class="form-select">
          <option value="buy">Buy</option>
          <option value="sell">Sell</option>
        </select>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" required>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Price per item</label>
        <input type="number" name="price" class="form-control" required>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Tanggal</label>
        <input type="datetime-local" name="datetime" class="form-control" required>
      </div>
      <a href="/drugs" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
