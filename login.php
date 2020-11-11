<?php
   require_once 'config.php';
   
   if(!empty($_REQUEST['login']) && !empty($_REQUEST['pwd'])) {
       $success = UserManager::getInstance()->login($_REQUEST['login'], $_REQUEST['pwd']);
       if($success) {
           Utils::redirect('index.php');
       }
   }
   
?><!doctype html>
<html>
    <head>
        <title>Baggio GED - Connexion</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container">
            <h1>Connexion</h1>
            <form method="post" action="login.php">
                    <p>Informations de connexion</p>
                        <p><label for="login_field">Login</label></p>
                        <input type="text" name="login" id="login_field" />
                        <p>
                            Ce login est utilisé pour vous connecter,
                            et n'est pas affiché.
                        </p>
                        <p><label for="pwd_field">Mot de passe</label></p>
                        <input type="password" name="pwd" id="pwd_field" />
                        <input class="login" type="submit" value="Vous connecter" />
            </form>
        </div>
    </body>
</html>