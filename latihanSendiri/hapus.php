<?php
session_start();
require 'functions.php';

if (isset($_GET['id'])) {
    $index = $_GET['id'];
    hapus($index);
}

header("Location: index.php");
exit;
?>
