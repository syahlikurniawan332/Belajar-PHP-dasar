<?php
session_start();
require "functions.php";

$id = $_GET['id'];

if (isset($id)) {
    hapus($id);
}
header("Location: index.php");
exit();
