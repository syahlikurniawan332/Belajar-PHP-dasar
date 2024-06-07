<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
};

$jumlaDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM films"));
$jumlahHalaman  = ceil($jumlahData / $jumlaDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlaDataPerhalaman * $halamanAktif) - $jumlaDataPerhalaman;

$film = query("SELECT * FROM films LIMIT $awalData, $jumlaDataPerhalaman");


// fitur pencarian
if (isset($_POST['cari'])) {
    $film = cari($_POST["keyword"]);
    $jumlahData = count($film);
    $jumlahHalaman = ($jumlahData > 0) ? ceil($jumlahData / $jumlaDataPerhalaman) : 1;
    $halamanAktif = 1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Films</h1>
    <a href="tambah.php">Tambah Data Film</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="silahkan cari.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">cari!</button>
    </form>

    <br><br>
    <!-- navigasi -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&lt;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color:red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&gt;</a>
    <?php endif; ?>
    <br><br>
    <div id="container">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>AKSI</th>
                    <th>GAMBAR</th>
                    <th>JUDUL</th>
                    <th>SUTRADARA</th>
                    <th>TAHUN_RILIS</th>
                    <th>GENRE</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($film as $row) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
                            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>
                        </td>

                        <td><img src="img/<?= $row["gambar"]; ?>" alt="Gambar <?= $row["judul"]; ?>"></td>
                        <td><?= $row["judul"]; ?></td>
                        <td><?= $row["sutradara"]; ?></td>
                        <td><?= $row["tahun_rilis"]; ?></td>
                        <td><?= $row["genre"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="js/scripts.js"></script>
</body>

</html>