<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040157');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = $data['nama'];
  $nrp = $data['nrp'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];

  $query = "INSERT INTO
              mahasiswa
            VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
            ";
  mysqli_query($conn, $query);
}
