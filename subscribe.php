<?php
   require_once 'config.php';
   
?><!doctype html>
<html>
    <head>
        <title>Baggio GED</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Inscription</h1>
        <form method="post" action="subscribe-valid.php">
            <fieldset>
                <legend>Informations de connexion</legend>
                <p>
                    <label for="login_field">Login</label>
                    <input type="text"
                           name="login"
                           required="required"
                           id="login_field" />
                    <em>
                        Ce login est utilisé pour vous connecter,
                        et n'est pas affiché.
                    </em>
                </p>
                <p>
                    <label for="pwd_field">Mot de passe</label>
                    <input type="text"
                           required="required" name="pwd" id="pwd_field" />
                </p>
            </fieldset>
            <fieldset>
                <legend>Autres informations</legend>
                <p>
                    <label for="public_field">Nom public</label>
                    <input type="text" name="publicName" id="public_field" />
                    <em>
                        Ce login est utilisé partout,
                        et est visible de tous.
                    </em>
                </p>
            </fieldset>
            <?php if(!empty($_GET['error'])) { echo 'Une erreur est survenue : '.$_GET['error']; } ?>
            <p>
                <label>
                    <input type="checkbox" required="required" />
                    J'accepte les conditions générales d'utilisation
                </label>
            </p>
            <p>
                <input type="submit" value="Vous connecter" />
            </p>
        </form>
    </body>
</html>