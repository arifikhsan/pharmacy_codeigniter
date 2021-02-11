<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Transactions
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/transactions/add">
      Add new
    </a>
  </div>
  <hr><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Supplier</th>
        <th scope="col">Drug</th>
        <th scope="col">Type</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price/item</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($transactions as $i => $transaction) : ?>
        <tr>
          <th scope="row"><?= $i + 1 ?></th>
          <td><?= $transaction->supplier_name ?></td>
          <td><?= $transaction->drug_name ?></td>
          <td><?= $transaction->type ?></td>
          <td><?= $transaction->quantity ?></td>
          <td><?= number_format($transaction->price) ?></td>
          <td><?=date("l, M d, Y | H:i:s", strtotime($transaction->datetime)) ?></td>
          <td>
            <a class="text-white btn btn-sm btn-info" href="<?= '/transactions/edit/' . $transaction->id ?>">
              Edit
            </a>
            <a class="btn btn-sm btn-danger" href="<?= '/transactions/delete/' . $transaction->id ?>">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
<?= $this->endSection() ?>
