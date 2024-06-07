<?php
session_start();
require "functions.php";

$data = isset($_SESSION['data']) ? $_SESSION['data'] : [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman tugas</title>
</head>

<body>
    <h1>Implementasi Array</h1>
    <h3>membuat bintang berpola</h3>
    <?php
    tampil(5);
    ?>

    <h3>membuat bintang berpola 2</h3>
    <?php
    pola(4);
    ?>

    <h3>menampilkan data dalam array</h3>
    <a href="tambah.php">tambah data array</a>
    <br>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>kelas</th>
            <th>nilai</th>
        </tr>
        <?php foreach ($data as $index => $siswa) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td>
                    <a href="ubah.php?id=<?= $index; ?>">ubah</a> |
                    <a href="hapus.php?id=<?=$index ?>" onclick="return confirm('Are you sure you want to delete this data')">Hapus</a>
                </td>
                <td> <img src="img/<?= $siswa['gambar'] ?>" width="70" height="70"></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['kelas'] ?></td>
                <td><?= $siswa['nilai'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>