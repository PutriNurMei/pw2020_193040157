<?php
if (!isset($_GET['id'])) {
    header("location:../index.php");
    exit;
}
require '../php/functions.php';

$id = $_GET['id'];

$result = query("SELECT * FROM makanan where id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
</head>

<body style="background-image: url('../assets/img/bc.png');">

    <br>

    <div class="card ml-3 mt-3 m-auto" style="width: 40rem;">
        <img src="../assets/img/<?= $result["foto"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $result["nama"]; ?></h5>
            <p class="card-text"><?= $result["resep"]; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"></li>
            <li class="list-group-item"><?= $result["asal"]; ?></li>
            <li class="list-group-item"><?= $result["harga"]; ?></li>
        </ul>
        <div class="card-body">
            <a href="../index.php" class="card-link btn btn-success rounded-0">Kembali</a>
        </div>
    </div>

</body>

</html>