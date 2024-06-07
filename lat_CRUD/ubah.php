<?php
require 'functions.php';

// Ambil data di URL
$id = $_GET["id"];
// query data film berdasarkan id
$film = query("SELECT * FROM films WHERE id = $id")[0];


// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data tidak berhasil diubah!');
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
    <title>Ubah Data Film</title>
</head>

<body>
    <h1>Tambah Data Film</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $film['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $film['gambar']; ?>">
        <ul>
            <li>
                <label for="judul">Judul: </label>
                <input type="text" name="judul" id="judul" required value="<?= $film['judul']; ?>">
            </li>
            <li>
                <label for="tahun_rilis">Tahun Rilis: </label>
                <input type="number" name="tahun_rilis" id="tahun_rilis" required value="<?= $film['tahun_rilis']; ?>">
            </li>
            <li>
                <label for="sutradara">Sutradara: </label>
                <input type="text" name="sutradara" id="sutradara" required value="<?= $film['sutradara']; ?>">
            </li>
            <li>
                <label for="genre">Genre: </label>
                <input type="text" name="genre" id="genre" required value="<?= $film['genre']; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label><br><img src="img/<?= $film['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>