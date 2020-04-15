<?php
include 'text.html';
session_start();
if($_SESSION["login"] == false){
    header("location: login");
    exit();
}
?>

