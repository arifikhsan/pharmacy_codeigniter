<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Products
    </h1>
  </div>
  <hr><br>
  <div class="col-md-6 offset-md-3">
    <form action="<?= '/products/update/' . $product->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label>Name</label>
        <input value="<?= $product->name ?>" type="text" name="name" class="form-control" placeholder="name" required />
      </div>
      <div class="form-group">
        <label>Price</label>
        <input value="<?= $product->price ?>" type="number" name="price" class="form-control" placeholder="price" required>
      </div>
      <a href="/products" class="btn mt-4 btn-secondary">Back</a>
      <button type="submit" class="btn mt-4 btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
