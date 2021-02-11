<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<h1>Welcome</h1>
<div class="container">
  <h1>
    <center>Product List
      <hr><br>
    </center>
  </h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 0;
      foreach ($products as $product) :
        $count++;
      ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <td><?php echo $product->name; ?></td>
          <td><?php echo number_format($product->price); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
<?= $this->endSection() ?>
