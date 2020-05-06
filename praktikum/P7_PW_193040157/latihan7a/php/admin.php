<?php
require 'functions.php';

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
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>latihan6e</title>
</head>

<body>
  <div class="container">
    <h3 align="center">Daftar Makanan</h3>

    <a href="logout.php">
      <button type="submit">Logout</button>
    </a>
    <br>
    <br>
    <a href="tambah.php">
      <button type="">Tambah Data Makanan</button>
    </a>
    <br><br>

    <form action="" method="GET">
      <input type="text" name="keyword" size="36" placeholder="Masukan keyword pencarian..." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <br>

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

      <?php if (empty($result)) : ?>
        <tr>
          <td colspan="7">
            <p style=" color: red; font-style: italic; text-align: center;">Data Makanan Tidak Ditemukan!</p>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1 ?>
        <?php foreach ($result as $values) : ?>
          <tr>
            <td><?= $i ?></td>
            <td>
              <button><a href="ubah.php?id=<?= $values['id']; ?>">Ubah</a></button>
              <button><a href="hapus.php?id=<?= $values['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></button>
            </td>
            <td><img src="../assets/img/<?= $values["foto"]; ?>" alt="..." class="img-thumbnail" width="150px"></td>
            <td><?= $values["nama"]; ?></td>
            <td><?= $values["resep"]; ?></td>
            <td><?= $values["asal"]; ?></td>
            <td><?= $values["harga"]; ?></td>
          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>