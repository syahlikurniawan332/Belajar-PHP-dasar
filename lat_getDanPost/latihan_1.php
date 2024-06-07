<?php
// variabel global milik php 
// _get 
$films = [
    [
        'nama' => 'Harry Potter',
        'genre' => 'Fantasy',
        'durasi' => '2 jam',
        'rating' => 8.0,
        'gambar' => 'img/page1.jpg'
    ],
    [
        'nama' => 'Lord of the ring',
        'genre' => 'Fantasy',
        'durasi' => '3 jam',
        'rating' => 8.3,
        'gambar' => 'img/page2.jpg'
    ],
    [
        'nama' => 'Artur',
        'genre' => 'Fantasy',
        'durasi' => '1.5 jam',
        'rating' => 7.6,
        'gambar' => 'img/page3.jpg'
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<style>
    ul li img {
        width: 100px;
        height: 100px;
        margin: 10px;
    }
</style>

<body>
    <h1>Daftar Film</h1>
    <ul>
        <?php foreach ($films as $film) : ?>
            <li><a href="latihan_2.php?nama=<?=$film["nama"];?>&genre=<?= $film['genre'] ?>&durasi=<?= $film['durasi'] ?>&rating=<?= $film['rating'] ?>&gambar=<?= $film['gambar'] ?> "><?= $film['nama']; ?> </a> </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>