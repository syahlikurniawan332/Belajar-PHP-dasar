<?php
// pengulangan
// for 
// while 
// do while 
// foreach 

// for ($i=0; $i < 5; $i++) { 
//     echo "Hello word <br>";
// }

// $a = 0;
// while ($a <= 5) {
//     echo "Hello world <br>";
// $a++;
// }

// $a = 0;
// do {
//     echo "Hello World <br>";
//     $a++;
// } while ($a <= 5);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i <= 3; $i++) : ?>
            <tr>
                <?php for($j=1; $j<=5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>