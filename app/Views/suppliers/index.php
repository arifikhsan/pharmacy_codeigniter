<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Suppliers
    </h1>
    <a class="btn btn-sm btn-secondary mt-2" href="/">
      Back
    </a>
    <a class="btn btn-sm btn-info text-white mt-2" href="/suppliers/add">
      Add new
    </a>
  </div>
  <hr><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($suppliers as $i => $supplier) : ?>
        <tr>
          <th scope="row"><?= $i + 1 ?></th>
          <td><?= $supplier->name ?></td>
          <td><?= $supplier->address ?></td>
          <td>
            <a class="btn btn-sm btn-info text-white" href="<?= '/suppliers/edit/' . $supplier->id ?>">
              Edit
            </a>
            <a class="btn btn-sm btn-danger" href="<?= '/suppliers/delete/' . $supplier->id ?>">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
<?= $this->endSection() ?>
