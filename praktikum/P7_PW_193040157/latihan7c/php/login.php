<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <h3>SILAHKAN LOGIN</h3>
  <form action="" method="POST">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password Saalah!</p>
    <?php endif; ?>
    <table>
      <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input class="username" type="text" name="username"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
    </table>
    <input type="checkbox" name="remember">
    <label for="remember">Remember Me</label>
    <br>

    <br>
    <button type="submit" name="submit">Login</button>
  </form>
  <div class="registrasi">
    <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
  </div>
</body>

</html>