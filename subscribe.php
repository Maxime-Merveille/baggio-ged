<?php
   require_once 'config.php';
   
?><!doctype html>
<html>
    <head>
        <title>Baggio GED</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/subscribe.css">
    </head>
    <body>
        <div class="container">
            <h1>Inscription</h1>
            <form method="post" action="subscribe-valid.php">
                
                    <legend>Informations de connexion</legend>
                    <p><label for="login_field">Login</label></p>
                        <input class="input_field" type="text"
                            name="login"
                            required="required"
                            id="login_field" />
                        <p>
                            Ce login est utilisé pour vous connecter,
                            et n'est pas affiché.
                        </p>
                    <p><label for="pwd_field">Mot de passe</label></p>
                        <input class="input_field" type="text"
                            required="required" name="pwd" id="pwd_field" />
                
                
                    <p>Autres informations</p>
                    <p><label for="public_field">Nom public</label></p>
                        <input class="input_field" type="text" name="publicName" id="public_field" />
                        <p>
                            Ce login est utilisé partout,
                            et est visible de tous.
                        </p>
                
                <?php if(!empty($_GET['error'])) { echo 'Une erreur est survenue : '.$_GET['error']; } ?>
                
                    <p><label>
                        <input class="checkbox" type="checkbox" required="required" />
                        J'accepte les conditions générales d'utilisation
                    </label></p>
                    <input class="input_field register" type="submit" value="Vous connecter" />
                
            </form>
        </div>
    </body>
</html>