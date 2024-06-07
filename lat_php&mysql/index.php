<?php 
require 'functions.php';
$film = query("SELECT * FROM films");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<style>
    tbody tr td img {
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <h1>Daftar Films</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>AKSI</th>
                <th>JUDUL</th>
                <th>TAHUN_RILIS</th>
                <th>GENRE</th>
                <th>GAMBAR</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach ($film as $row) : ?>
        <tbody>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="#">ubah</a> | 
                    <a href="#">hapus</a>
                </td>
                <td><img src="<?= $row["gambar"]; ?>"></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["tahun_rilis"]; ?></td>
                <td><?= $row["genre"]; ?></td>
            </tr>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>