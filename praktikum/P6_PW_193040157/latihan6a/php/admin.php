<?php
require 'functions.php';

$result = query("SELECT * FROM makanan")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>latihan6a</title>
</head>

<body>
  <div class="container">
    <h3 align="center">Daftar Makanan</h3>
    <table border="1" cellpadding="3" cellspacing="2">
      <tr>
        <th>No.</th>
        <th>Opsi</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Resep</th>
        <th>Asal</th>
        <th>Harga</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($result as $values) : ?>
        <tr>
          <td><?= $i ?></td>
          <td>
            <button><a href="">Ubah</a></button>
            <button><a href="">Hapus</a></button>
          </td>
          <td><img src="../assets/img/<?= $values["foto"]; ?>" alt="..." class="img-thumbnail" width="150px"></td>
          <td><?= $values["nama"]; ?></td>
          <td><?= $values["resep"]; ?></td>
          <td><?= $values["asal"]; ?></td>
          <td><?= $values["harga"]; ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>