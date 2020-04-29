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
  <title>latihan6e</title>
</head>

<body>
  <br>
  <form action="" method="GET">
    <input type="text" name="keyword" size="36" placeholder="Masukan keyword pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>
  <?php if (empty($result)) : ?>
    <p style=" font-size: 30px; color: red; font-style: italic; text-align: center;">Data Makanan Tidak Ditemukan!</p>
  <?php else : ?>

    <div class="container">

      <?php $i = 1 ?>
      <?php foreach ($result as $values) : ?>
        <p class="nama">
          <a href="php/detail.php?id=<?= $values['id'] ?>">
            <?= $values["nama"] ?>
          </a>
        </p>
      <?php endforeach; ?>
      </table>
    </div>

  <?php endif; ?>

  <br>
  <a href="php/admin.php">
    <button type="">
      Masuk ke halaman Admin
    </button>
  </a>
  <br>
</body>

</html>