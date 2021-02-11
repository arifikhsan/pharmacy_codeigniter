<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Drugs
    </h1>
    <a class="btn btn-sm btn-secondary mt-2" href="/">
      Back
    </a>
    <a class="btn btn-sm btn-info text-white mt-2" href="/drugs/add">
      Add new
    </a>
  </div>
  <hr><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Drug Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($drugs as $i => $drug) : ?>
        <tr>
          <th scope="row"><?= $i + 1 ?></th>
          <td><?= $drug->name ?></td>
          <td><?= number_format($drug->price) ?></td>
          <td>
            <a class="btn btn-sm btn-info text-white" href="<?= '/drugs/edit/' . $drug->id ?>">
              Edit
            </a>
            <a class="btn btn-sm btn-danger" href="<?= '/drugs/delete/' . $drug->id ?>">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
<?= $this->endSection() ?>
