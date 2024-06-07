<?php

// latihan pertama
// mengenal sintak dasar php

// standar penampilan di php 
// echo "hallo world";
// print("hallo world");
// var_dump("hallo world");

// variabel dan tipe data 
// $name = "pemrograman php";

// echo "saya sedang belajar $name";

// operator 
// aritmatika 
// + - * / %
// $x = 25;
// $y = 60;
// echo $x * $y;

// penggabungan string / concatenation / concat
// .
// $nama_depan = "Syahli";
// $nama_belakang = "Kurniawan";
// echo $nama_depan . " " . $nama_belakang;

// assigment
// =, +=, -=, *=, /=, %=, .=
// $angka = 20;
// $angka *= 10;
// echo $angka
// $nama_depan = "Syahli";
// $nama_depan .= "Kurniawan";
// echo $nama_depan;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == '1'); // hanya mengecek nilai, bukan tipe datanya

// identitas
// ===, !==
// var_dump(1 === '1'); // hanya mengecek nilai dan tipe datanya

// logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

$nama = "nay";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Selamat datang, <?php echo $nama ?> </h1>
</body>

</html>