<?php

$url = $_SERVER['REQUEST_URI'];

switch ($url) {

    case '/New/' :

    case '/New/registration' :
        $filename = 'registration.php';
        break;
    case '/New/login':
        $filename = 'login.php';
        break;
    case '/New/logout':
        $filename = 'logout.php';
        break;
    case '/New/text':
        $filename = 'text.php';
        break;
    default :
        $filename = '404.php';
}

require $filename;
