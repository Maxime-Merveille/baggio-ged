<?php
require_once 'config.php';

$success = UserManager::getInstance()->subscribe($_REQUEST['login'], $_REQUEST['pwd'], $_REQUEST['publicname']);

if(!$success) {
    Utils::redirect('subscribe.php?error=already_exists');
}

?><!doctype html>
<html>
    <head>
        <title>Baggio GED</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Inscription réussie !</h1>
        <p>
            Veuillez
            <a href="login.php">vous connecter</a>
            !
        </p>
    </body>
</html>