<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM films WHERE 
judul LIKE '%$keyword%' OR 
tahun_rilis LIKE '%$keyword%' OR 
sutradara LIKE '%$keyword%' OR 
genre LIKE '%$keyword%'
";
$film = query($query);

?>

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