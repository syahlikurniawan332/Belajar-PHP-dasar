<?php
// cek apakah tidak ada data di _GET 
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["durasi"]) ||
    !isset($_GET["rating"]) ||
    !isset($_GET["gambar"])
) {
    //redirect
    header("Location: latihan_1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Films</title>
</head>
<style>
    ul li img {
        width: 100px;
        height: 100px;
        margin: 10px;
    }
</style>

<body>
    <ul>
        <li><img src="<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["genre"]; ?></li>
        <li><?= $_GET["durasi"]; ?></li>
        <li><?= $_GET["rating"]; ?></li>
    </ul>

    <a href="latihan_1.php">kembali ke daftar mahasiswa</a>
</body>

</html>