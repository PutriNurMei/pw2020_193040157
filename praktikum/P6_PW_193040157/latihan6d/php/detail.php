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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class ="container">
    <?php $i=1 ?>
        <p><?= $i?></p>
        <div class="foto">
            <img src="../assets/img/<?= $result["foto"]; ?>" alt="..." class="img-thumbnail" width="150px">
        </div>
        <div class="keterangan">
            <p><?= $result["nama"]; ?></p>
            <p><?= $result["resep"]; ?></p>
            <p><?= $result["asal"]; ?></p>
            <p><?= $result["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>

    </div>
</body>
</html>