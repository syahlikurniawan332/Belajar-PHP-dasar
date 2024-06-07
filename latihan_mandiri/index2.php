<?php

session_start();
function tampil($row) {
    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <=$i; $j++) {
            echo "*";
        }
        echo "<br />";
    }
    for ($i = $row - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br />";
    }
}

function pola($row) {
    // membuat baris baru tiap perulangan
    for ($i = 1; $i <= $row; $i++) {
        // membuat spasi di awal
        for ($k=$row; $k >= $i + 1; $k--){
            echo "_";
        }
        // buat bintang kelipatan 2 tiap perulangan
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    // membuat baris baru tiap perulangan
    for ($i = $row - 1; $i >= 1; $i--){
        // membuat spasi di awal
        for ($k=$row; $k >= $i + 1; $k--){
            echo "_";
        }
        // membuat bintang kelipatan 2 tiap perulangan
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

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
    <a href="tambahdata.php">tambah data array</a>
    <br>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>kelas</th>
            <th>nilai</th>
        </tr>
        <?php
        // Ambil data dari sesi jika tersedia
        $data = isset($_SESSION['data']) ? $_SESSION['data'] : [];

        foreach ($data as $index => $siswa) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['kelas'] ?></td>
                <td><?= $siswa['nilai'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>