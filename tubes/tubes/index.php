<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $result = query("SELECT * FROM makanan WHERE
                    foto LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    resep LIKE '%$keyword%' OR
                    asal LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'
                    ");
} else {
  $result = query("SELECT * FROM makanan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Makanan</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">

</head>

<body style="background-image: url('assets/img/bc.png');">
  <br>
  <br>
  <?php if (empty($result)) : ?>
    <div class="col-8 m-auto">
      <div class="alert alert-danger" role="alert">
        Data Makanan Tidak Ditemukan!
      </div>
      <a href="<?= "index.php" ?>" class="btn btn-success ">Kembali</a>
    </div>
  <?php else : ?>

    <div class="col-8 m-auto">

      <a href="php/login.php" class="btn btn-outline-primary rounded-0">
        Masuk ke halaman Admin
      </a>


      <form action="" method="GET" class="form-inline">
        <div class="form-group mr-2 mt-2 mb-2">
          <input type="text" name="keyword" class="form-control rounded-0" id="inputPassword2" placeholder="Masukan pencarian...">
        </div>
        <button type="submit" name="cari" class="btn btn-primary rounded-0">Cari</button>
      </form>

      <table class="table table-striped table-bordered">
        <thead class="bg-primary">
          <tr>
            <th scope="col" class="text-center text-light">No</th>
            <th scope="col" class="text-light">Nama Makanan</th>
            <th scope="col" class="text-center text-light">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-light">
          <?php $no = 1; ?>
          <?php foreach ($result as $values) : ?>
            <tr>
              <th scope="row" class="text-center"><?= $no++ ?></th>
              <td><?= $values['nama'] ?></td>
              <td class="text-center"><a href="php/detail.php?id=<?= $values['id'] ?>" class="btn btn-info rounded-0">Detail</a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>

  <?php endif; ?>

</body>

</html>