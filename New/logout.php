<?php
session_start();
if($_SESSION["login"] == false){
    header("location: login.php");
}

session_destroy();
echo "logout";
exit();
