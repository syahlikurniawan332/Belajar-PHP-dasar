<?php
session_start();
require "functions.php";

$id = $_GET['id'];

$siswa = isset($_SESSION['data'][$id]) ? $_SESSION['data'][$id] : [];

// Tangani jika formulir dikirim
if (isset($_POST['submit'])) {
    $_POST['id'] = $id;
    ubah($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman ubah</title>
</head>

<body>
    <h1>Ubah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li><label for="nama">nama :</label></li>
            <li><input type="text" name="nama" id="nama" value="<?= $siswa['nama']; ?>"></li>
            <li><label for="gambar">gambar :</label></li>
            <li><input type="text" name="gambar" id="gambar" value="<?= $siswa['gambar']; ?>"></li>
            <li><label for="kelas">kelas :</label></li>
            <li><input type="text" name="kelas" id="kelas" value="<?= $siswa['kelas']; ?>"></li>
            <li><label for="nilai">nilai :</label></li>
            <li><input type="number" name="nilai" id="nilai" min="0" max="100" required value="<?= $siswa['nilai']; ?>"></li>
            <br>
            <li><button type="submit" name="submit">ubah data!</button></li>
        </ul>
    </form>
</body>

</html>