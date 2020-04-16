<?php
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

    mysqli_select_db($conn, "pw_193040157") or die ("Database salah!");

    $result = mysqli_query($conn, "SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>latihan5a</title>
</head>
<body>
  <div class="container">
  <h3 align="center">Daftar Makanan</h3>
    <table border="1" cellpadding="3" cellspacing="2">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Resep</th>
          <th>Asal</th>
          <th>Harga</th>
        </tr>
            <?php $i=1 ?>
          <?php while($values = mysqli_fetch_assoc($result)) :?>
          <tr>
            <td><?=$i?></td>
            <td><img src="assets/img/<?=$values["foto"];?>" alt="..." class="img-thumbnail" width="150px"></td>
            <td><?=$values["nama"];?></td>
            <td><?=$values["resep"];?></td>
            <td><?=$values["asal"];?></td>
            <td><?=$values["harga"];?></td>
          </tr>
          <?php $i++ ?>
          <?php endwhile; ?>
      </table>
  </div>
</body>
</html>