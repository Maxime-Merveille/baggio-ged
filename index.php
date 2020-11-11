<?php
   require_once 'config.php';
   
?><!doctype html>
<html>
    <head>
        <title>Baggio GED</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="header">
        <h1>GED</h1>
            
                <p>
                    Ce site est un prototype d'exercices pour une GED,
                    à destination des élèves de BTS SNIR 2nde année.
                </p>
        </div>
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
        <div class="container">
                <p>
                    <h2>Vous n'êtes pas connecté.</h2>
                    Vous devez vous connecter si vous avez un compte
                    <a href="login.php" class="button first_button">
                        <h3>login</h3>
                    </a>
                    ou vous inscrire si vous n'en avez pas encore
                    <a href="subscribe.php" class="button second_button">
                        <h3>register</h3>
                    </a>.
                </p>
            <?php } ?>
        </div>
    </body>
</html>