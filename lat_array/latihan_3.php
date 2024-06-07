<?php

$mahasiswa = [
    ["bob", "1234", "Teknik Electro", "bob@yahoo.com"],
    ["bob", "1234", "Teknik Electro", "bob@yahoo.com"],
    ["bob", "1234", "Teknik Electro", "bob@yahoo.com"],
    ["bob", "1234", "Teknik Electro", "bob@yahoo.com"]
];

$films = [
    ["Avenger", "2012", "Maze Runner", "Kungfu Panda 3"],
    ["Avenger", "2012", "Maze Runner", "Kungfu Panda 3"]
];

foreach ($films as $film_array) {
    foreach ($film_array as $film) {
        echo $film . "\n";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

    <h3>Daftar Film</h3>
    <ul>
        <?php foreach ($films as $film) : ?>
            <li><?= $film[1]; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>