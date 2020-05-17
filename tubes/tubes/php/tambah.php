<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
         </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
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
  <title>Tambah Data</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">

</head>

<body style="background-image: url('../assets/img/bc.png');">
  <h3 class="text-center mt-3 text-light">
    Form Tambah Data Makanan
  </h3>

  <div class="col-8 m-auto text-light">
    <form accept="" method="POST">
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" name="foto" id="foto" autofocus required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="resep">Resep</label>
        <input type="text" class="form-control" name="resep" id="resep" required>
      </div>
      <div class="form-group">
        <label for="asal">Asal</label>
        <input type="text" class="form-control" name="asal" id="asal" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga" id="harga" required>
      </div>
      <button type="submit" class="btn btn-primary rounded-0" name="tambah">Tambah Data</button>
    </form>
  </div>

</body>

</html>