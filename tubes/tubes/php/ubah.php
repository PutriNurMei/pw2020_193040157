<?php

require 'functions.php';

$id = $_GET['id'];
$result = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
         </script>";
  } else {
    echo "<script>
            alert('Data gagal diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">

</head>

<body style="background-image: url('../assets/img/bc.png');">

  <h3 class="text-center mt-3 text-light">
    Form Ubah Data Makanan
  </h3>

  <div class="col-8 m-auto text-light">
    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $result['id']; ?>">
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" value="<?= $result['foto']; ?>" name="foto" id="foto" autofocus required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" value="<?= $result['nama']; ?>" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="resep">Resep</label>
        <input type="text" class="form-control" value="<?= $result['resep']; ?>" name="resep" id="resep" required>
      </div>
      <div class="form-group">
        <label for="asal">Asal</label>
        <input type="text" class="form-control" value="<?= $result['asal']; ?>" name="asal" id="asal" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" value="<?= $result['harga']; ?>" name="harga" id="harga" required>
      </div>
      <button type="submit" class="btn btn-primary rounded-0" name="ubah">Tambah Data</button>
    </form>
  </div>

</body>

</html>