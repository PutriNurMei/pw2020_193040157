<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040157") or die("Database salah!");

    return $conn;
}

function query($sql)
{

    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $resep = htmlspecialchars($data['resep']);
    $asal = htmlspecialchars($data['asal']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO
              makanan
                VALUES
              (null, '$foto', '$nama', '$resep', '$asal', '$harga');
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
