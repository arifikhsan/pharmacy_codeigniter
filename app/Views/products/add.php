<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <h1>
    <center>Add New Product
      <hr><br>
    </center>
  </h1>
  <div class="col-md-6 offset-md-3">
    <form action="/products/insert" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="name" required>
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" placeholder="price" required>
      </div>
      <button type="submit" class="btn mt-4 btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
