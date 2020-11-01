<?php
   require_once 'config.php';
   
?><!doctype html>
<html>
    <head>
        <title>Baggio GED</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>GED</h1>
        <p>
            Ce site est un prototype d'exercices pour une GED,
            à destination des élèves de BTS SNIR 2nde année.
        </p>
        <?php if(Session::getInstance()->isLogged()) {
            $loggedInUserData = UserManager::getInstance()->getUserDataById(
                        Session::getInstance()->getLoggedUser()
                    );
            $invitesCodes = SponsorManager::getInstance()->getCodesForSponsor(
                        Session::getInstance()->getLoggedUser()
                    );
            ?>
        <p>
            Vous êtes connecté en tant que
            <?php echo htmlspecialchars($loggedInUserData['publicName']); ?>.
        </p>
        <section>
            <header>
                <h2>Vos codes invités</h2>
                <p>
                    Donnez ces codes invités à d'autres personnes
                    pour qu'ils bénéficient d'un quota supplémentaire !
                </p>
            </header>
            <article>
                <dl>
                    <?php foreach($invitesCodes as $inviteCode) { ?>
                    <dt>
                        <?php echo htmlspecialchars($inviteCode['code']); ?>
                        (+<?php echo intval($inviteCode['quota']); ?>)
                    </dt>
                    <dd>
                        <em><?php echo htmlspecialchars($inviteCode['description']); ?></em>
                    </dd>
                    <?php } ?>
                </dl>
            </article>
        </section>
        <section>
            <header>
                <h2>Vos médias</h2>
            </header>
        </section>
        <?php } else { ?>
        <p>
            Vous n'êtes pas connecté.
            Vous devez
            <a href="login.php">
                vous connecter si vous avez un compte
            </a>
            ou
            <a href="subscribe.php">
                vous inscrire si vous n'en avez pas encore
            </a>.
        </p>
        <?php } ?>
    </body>
</html>