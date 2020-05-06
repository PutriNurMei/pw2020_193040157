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
  <title>Document</title>
</head>

<body>
  <h3>
    Form Tambah Data Makanan
  </h3>
  <form action="" method="POST">
    <table>
      <tr>
        <td>>
          <label>
            Foto :
            <input type="text" name="foto" autofocus required>
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="nama">
            Nama :
            <input type="text" name="nama" required>
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="resep">
            Resep :
            <input type="text" name="resep" required>
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="asal">
            Asal :
            <input type="text" name="asal" required>
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="harga">
            Harga :
            <input type="text" name="harga" required>
          </label>
        </td>
      </tr>
    </table>
    <button type="submit" name="tambah">Tambah Data</button>
  </form>
</body>

</html>