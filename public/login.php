<!DOCTYPE html>
<html lang="en">
<head>
    <title>MA TABLE</title>
    <?PHP require('./tpl/head.php'); ?>

    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <?PHP require('./tpl/header.php'); ?>
    <section id="formulaire">
        <div id="contentform">
            <div id="textHeadForm">
                <h1>Se connecter à MATABLE</h1>
                <span>lesite.com</span>
            </div>
            <div id="formContent">
                <span>Saisissez votre <span class="bold">adresse mail</span> et <span class="bold">votre mot de passe</span> </span>
                <form class="formConnexion" method="post" action="traitement.php">
                    <input type="text" name="pseudo" class="entreeConnexion" placeholder="adressemail.fr"/>
                    <input type="text" name="pseudo" class="entreeConnexion" placeholder="mot de passe"/>
                </form>
                <div id="connexion">
                    Connexion
                </div>
                <span class="remenberMe">
                <input type="checkbox" name="pseudo" class="checkRememberMe" placeholder="mot de passe"/>
                Se souvenir de moi
                </span>
                <div id="idForget">
                <a href="#">Mot de passe oublié ? </a>
                <a href="#">Vous avez oublié l'e-mail que vous avez utilisé ? </a>
                </div>
            </div>
        </div>
    </section>
    <?PHP require('./tpl/footer.php'); ?>
</body>
</html>