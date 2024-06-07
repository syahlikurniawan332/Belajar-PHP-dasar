<?php

// DATE 
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-m-y");


// Time 
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("d m y", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
// echo date("l", mktime(0,0,0,7,9,2002));


// latihan function 
function salam ($waktu ,$name) {
    return "Selamat $waktu, $name";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi" ,"Sasa" ); ?></h1>
</body>
</html>