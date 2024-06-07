<?php
session_start();
require "functions.php";

$siswa = isset($_SESSION['data']) ? $_SESSION['data'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>

<body>
    <h1>Membuat Bintang Berpola</h1>
    <?php
    // Pola pertama
    $arah = 'naik';
    $max_bintang = 4;
    $awal = 1;

    while ($awal > 0) {
        tampilBintang($awal);
        echo "<br>";
        if ($arah == 'naik'){
            $awal++;
            if ($max_bintang == $awal) {
                $arah = 'turun';
            }
        }elseif ($arah == 'turun') {
            $awal--;
        }
        
    }
    ?>
    <br>
    <br>
    <h1>membuat bintang berpola 2</h1>
    <?php 
    // Pola kedua
    $arah = 'naik';
    $max_bintang = 4;
    $awal = 1;
    while($awal > 0){
        $us = $max_bintang - $awal;
        $b = 2*$awal-1;
    
        tampilUnderscore($us);
        tampilBintang($b);
        echo "<br/>";
    
        if($arah == 'naik'){
            $awal++;
            if ($awal == $max_bintang){
                $arah = 'turun';
            }
        }elseif ($arah == 'turun'){
            $awal--;
        } 
    }
    ?>
    <br>
    <br>
    <h1>Tampilkan data siswa pelajaran matematika</h1>
    <a href="tambah.php">tambah data siswa</a>
    <br>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>no</th>
                <th>aksi</th>
                <th>nama</th>
                <th>foto</th>
                <th>kelas</th>
                <th>nilai</th>
                <th>hasil</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach ($siswa as $index => $rows) : ?>
            <tbody>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $index ?>">edit</a> |
                        <a href="hapus.php?id=<?= $index ?>" onclick="return confirm('yakin ?')">delete</a>
                    </td>
                    <td><?= $rows['nama']; ?></td>
                    <td><img src="../img/<?= $rows['gambar']; ?>" width="70" height="70"></td>
                    <td><?= $rows['kelas']; ?></td>
                    <td><?= $rows['nilai']; ?></td>
                    <td><?= $rows['hasil']; ?></td>
                </tr>
            </tbody>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>