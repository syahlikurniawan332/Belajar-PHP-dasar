<?php
$angka = [2, 31, 4, 22, 54];
for ($i = 0; $i < count($angka); $i++) {
    echo "Data ke-" . ($i + 1) . ": " . $angka[$i] . "\n";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 2</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: salmon;
            margin: 5px;
            text-align: center;
            line-height: 100px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?= $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>

</html>