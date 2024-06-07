<?php
session_start();
require "functions.php";

if (isset($_POST['submit']) ) {
    tambah($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <h1>Tambah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li><label for="nama">nama :</label></li>
            <li><input type="text" name="nama" id="nama"></li>
            <li><label for="gambar">gambar :</label></li>
            <li><input type="text" name="gambar" id="gambar"></li>
            <li><label for="kelas">kelas :</label></li>
            <li><input type="text" name="kelas" id="kelas"></li>
            <li><label for="nilai">nilai :</label></li>
            <li><input type="number" name="nilai" id="nilai" min="0" max="100" required></li>
            <br>
            <li><button type="submit" name="submit">tambah data!</button></li>
        </ul>
    </form>
</body>

</html>