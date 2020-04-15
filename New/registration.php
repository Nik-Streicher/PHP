<?php

include 'database_handler.php';
include 'registration.html';
session_start();

if (isset($_SESSION['registration']))
    header("location: login");


if (isset($_SESSION["login"])) {
    header("location: text");
    exit();
}

$newName = $_POST['name'] ?? null;
$newPassword = $_POST['password'] ?? null;



if (is_string($newName) && is_string($newPassword)) {
    $user = new database_handler();
    $user->insert($newName, $newPassword);
} else {
    echo "empty fields";
}

if (is_string($newName) && is_string($newPassword)) {
    $_SESSION['name'] = $newName;
    $_SESSION["password"] = $newPassword;
    $_SESSION["registration"] = true;
}



$name = $_SESSION['name'] ?? null;
$password = $_SESSION['password'] ?? null;


?>
