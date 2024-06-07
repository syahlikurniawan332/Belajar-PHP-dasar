<?php
session_start();
require 'functions.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

$data =  isset($_SESSION['data']) ? $_SESSION['data'] : [];

$siswa = $data[$id];

if (isset($_POST['submit'])) {
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];
    ubah($id, $gambar, $nama, $kelas, $nilai);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data Siswa</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $siswa['nama'] ?>" required>
        <br>
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" value="<?= $siswa['kelas'] ?>" required>
        <br>
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" id="nilai" value="<?= $siswa['nilai'] ?>" required>
        <br>
        <label for="gambar">gambar:</label>
        <input type="text" name="gambar" id="gambar" value="<?= $siswa['gambar'] ?>" required>
        <br>
        <button type="submit" name="submit">Ubah</button>
    </form>
</body>

</html>