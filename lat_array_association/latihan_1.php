<?php
// array assosiatif 
// mirip dengan array numerik, hanya saja key nya adalah string 
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
    <title>array associatif</title>
</head>

<style>
    ul li img {
        width: 100px;
        height: 100px;
        margin: 10px;
    }
</style>

<body>
    <h1>Daftar films</h1>
    <?php foreach ($films as $film) : ?>
        <ul>
            <li><img src="<?= $film["gambar"]; ?>" alt=""></li>
            <li>Nama : <?= $film["nama"]; ?></li>
            <li>genre : <?= $film["genre"]; ?></li>
            <li>durasi : <?= $film["durasi"]; ?></li>
            <li>rating : <?= $film["rating"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>