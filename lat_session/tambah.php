<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
};

require 'functions.php';

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data tidak berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Film</title>
</head>

<body>
    <h1>Tambah Data Film</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul">Judul: </label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="tahun_rilis">Tahun Rilis: </label>
                <input type="number" name="tahun_rilis" id="tahun_rilis" required>
            </li>
            <li>
                <label for="sutradara">Sutradara: </label>
                <input type="text" name="sutradara" id="sutradara" required>
            </li>
            <li>
                <label for="genre">Genre: </label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>