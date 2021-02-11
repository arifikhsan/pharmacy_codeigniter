<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <h1><?php echo $content; ?></h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Depan</th>
          <th scope="col">Nama Tengah</th>
          <th scope="col">Nama Belakang</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Fatkhurrochman</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Wahyu</td>
          <td>-</td>
          <td>Priyoatmoko</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Muhammad</td>
          <td>Abdul</td>
          <td>Muin</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
