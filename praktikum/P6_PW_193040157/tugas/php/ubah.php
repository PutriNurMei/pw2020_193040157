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
  <title>Document</title>
</head>

<body>
  <h3>
    Form Tambah Data Makanan
  </h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $result['id']; ?>">
    <table>
      <tr>
        <td>>
          <label>
            Foto :
            <input type="text" name="foto" autofocus required value="<?= $result['foto']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="nama">
            Nama :
            <input type="text" name="nama" required value="<?= $result['nama']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="resep">
            Resep :
            <input type="text" name="resep" required value="<?= $result['resep']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="asal">
            Asal :
            <input type="text" name="asal" required value="<?= $result['asal']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="harga">
            Harga :
            <input type="text" name="harga" required value="<?= $result['harga']; ?>">
          </label>
        </td>
      </tr>
    </table>
    <button type="submit" name="ubah">Ubah Data</button>
  </form>
</body>

</html>