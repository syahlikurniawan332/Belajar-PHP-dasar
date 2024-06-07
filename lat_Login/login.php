<?php
require 'functions.php';
$conn = connectDB();

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username' ");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header('Location: index.php');
            exit;
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="font-style: italic; color:red">username atau password salah</p>
    <?php endif; ?>

    <h1>Halaman Login</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">masukan username :</label>
                <input type="text" id="username" name="username"">
            </li>
            <li>
                <label for=" password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>

</html>