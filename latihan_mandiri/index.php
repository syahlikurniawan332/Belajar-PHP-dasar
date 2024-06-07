<?php

session_start();
require 'functions.php';
// cari
$data = baca();
    if (isset($_POST['cari'])) {
        $keyword = $_POST['keyword'];
        $data = cari($keyword);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="tambah.php">tambah data array</a>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
        </tr>
        <?php
        foreach ($data as $id => $siswa) : ?>
            <tr>
                <td><?= $id + 1 ?></td>
                <td>
                    <a href="ubah.php?id=<?= $id ?>">Ubah</a> |
                    <a href="hapus.php?id=<?=$id ?>" onclick="return confirm('Are you sure you want to delete this data')">Hapus</a>
                </td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['kelas'] ?></td>
                <td><?= $siswa['nilai'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html> 