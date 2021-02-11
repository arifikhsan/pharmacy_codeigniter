<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Transaction
    </h1>
  </div>
  <hr><br>
  <div class="col-md-6 offset-md-3">
    <form action="<?= "/transactions/update/" . $transaction->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Supplier</label>
        <select name="supplier_id" class="form-select">
          <?php foreach ($suppliers as $supplier) : ?>
            <option value="<?= $supplier->id; ?>" <?= $supplier->id == $transaction->supplier_id ? 'selected' : '' ?>><?= $supplier->name; ?>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Drug</label>
        <select name="drug_id" class="form-select">
          <?php foreach ($drugs as $drug) : ?>
            <option value="<?= $drug->id; ?>" <?= $drug->id == $transaction->drug_id ? 'selected' : '' ?>><?= $drug->name; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Type</label>
        <select name="type" class="form-select">
          <option <?= $transaction->type == 'buy' ? 'selected' : '' ?> value="buy">Buy</option>
          <option <?= $transaction->type == 'sell' ? 'selected' : '' ?> value="sell">Sell</option>
        </select>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" required value="<?= $transaction->quantity ?>" />
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Price per item</label>
        <input type="number" name="price" class="form-control" required value="<?= $transaction->price ?>" />
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Tanggal</label>
        <input
        type="datetime-local"
        name="datetime"
        class="form-control"
        value="<?= date("Y-m-d\TH:i:s", strtotime($transaction->datetime)) ?>"
        required />
      </div>
      <a href="/drugs" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
