<?php
require 'functions.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi berhasil!');
            document.location.href = 'login.php';
         </script>";
  } else {
    echo "<script>
            alert('Registrasi gagal!');
            document.location.href = 'login.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">

</head>

<body style="background-image: url('../assets/img/bc.png');">
  <h3 class="text-center mt-3 text-light">SILAHKAN REGISTRASI</h3>

  <div class="col-8 m-auto text-light">
    <form accept="" method="POST" class="col-8 m-auto">
      <div class="form-group">
        <label for="email">Username</label>
        <input type="text" name="username" class="form-control rounded-0" id="email" autofocus>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control rounded-0" id="password">
      </div>
      <button type="submit" name="register" class="btn btn-primary rounded-0">Registrasi</button>
    </form>
  </div>

</body>

</html>