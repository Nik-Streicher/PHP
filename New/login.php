<?php

include 'database_handler.php';

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


?>

<form method="post">
    <label>Your name: <input name="name"></label>
    <label>Your password: <input name="password"></label>
    <button type="submit">submit</button>
</form>


