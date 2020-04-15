<?php

include 'database_handler.php';
include 'login.html';
session_start();
if ($_SESSION["registration"] == false) {
    header("location: registration");
    exit();
}
if (isset($_SESSION["login"])) {
    header("location: text");
    exit();
}

$login = new database_handler();

if ($login->check($_POST['name'] ?? null, $_POST['password'] ?? null)) {
    $_SESSION["login"] = true;
    echo "yes";
}




