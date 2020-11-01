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
    </head>
    <body>
        <h1>Connexion</h1>
        <form method="post" action="login.php">
            <fieldset>
                <legend>Informations de connexion</legend>
                <p>
                    <label for="login_field">Login</label>
                    <input type="text" name="login" id="login_field" />
                    <em>
                        Ce login est utilisé pour vous connecter,
                        et n'est pas affiché.
                    </em>
                </p>
                <p>
                    <label for="pwd_field">Mot de passe</label>
                    <input type="password" name="pwd" id="pwd_field" />
                </p>
                <p>
                    <input type="submit" value="Vous connecter" />
                </p>
            </fieldset>
        </form>
    </body>
</html>