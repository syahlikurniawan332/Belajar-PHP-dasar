<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            background-color: #ABCD55;
            text-align: center;
            line-height: 40px;
            margin: 5px 5px;
            float: left;
            transition: all .3s ease-in;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php $angkas = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
    <?php foreach ($angkas as $angka) : ?>
        <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>