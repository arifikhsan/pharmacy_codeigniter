<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Products
    </h1>
    <a class="btn btn-sm btn-info text-white mt-2" href="/products/add">
      Add new
    </a>
  </div>
  <hr><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($products as $i => $product) : ?>
        <tr>
          <th scope="row"><?= $i + 1 ?></th>
          <td><?= $product->name ?></td>
          <td><?= number_format($product->price) ?></td>
          <td>
            <a class="btn btn-sm btn-info text-white" href="<?= '/products/edit/' . $product->id ?>">
              Edit
            </a>
            <a class="btn btn-sm btn-danger" href="<?= '/products/delete/' . $product->id ?>">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
<?= $this->endSection() ?>
