<?php
session_start(); 

if (isset($_POST['submit'])) {

    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    $siswa = [
        'gambar' => $gambar,
        'nama' => $nama,
        'kelas' => $kelas,
        'nilai' => $nilai
    ];

    $_SESSION['data'][] = $siswa;
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
<h2>Form Tambah Siswa</h2>
    <!-- Aksi formulir diarahkan ke skrip test3.php -->
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" autocomplete="off"><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br>
        <label for="nilai">Nilai:</label><br>
        <input type="text" id="nilai" name="nilai"><br><br>
        <label for="nilai">Gambar:</label><br>
        <input type="text" id="gambar" name="gambar"><br><br>
        <button type="submit" name="submit">tambah</button>
    </form>
</body>
</html>