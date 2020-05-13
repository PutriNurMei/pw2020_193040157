<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data berhasil ditambahkan!');
              document.location.href = 'index.php';
            </script>";
  } else {
    echo 'Data gagal ditambahkan!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>
    <center> Form Tambah Data Mahasiswa </center>
  </h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <br>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="150" style="display: block;" class="img-preview">
      </li>
      <br>
      <li>
        <button type="submit" name="tambah">Tambah Data </button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>