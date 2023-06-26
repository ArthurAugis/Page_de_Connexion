<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Se connecter - Lion des Flandres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Importation de Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../JS/index_AAu.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/Lion_des_Flandres_AAu.png">


    <!--Importation du CSS-->
    <link href="../CSS/index_AAu.css" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Lion des Flandres</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="login_AAu.php">Se connecter</a></li>
                        <li><a href="contact_AAu.php">Contact</a></li>
                        <li><a href="https://github.com/ArthurAugis/Page_de_Connexion" target="_blank">Github</a></li>
                    </ul>
                    <img src="../images/violon_AAu.png" id="violon">
                </div>
            </div>
        </div>
    </nav>
    <img src="../images/Lion_des_Flandres_AAu.png" id="logo">
    <div class="container">
    <form action="resultat_AAu.php" method="post" id="monFormulaire">

    <label for="Identifiant" id="black">Identifiant</label>
    <input type="text" id="Identifiant" name="identifiant" placeholder="Votre identifiant..." required>

    <label for="MotDePasse" id="black">Mot de passe</label>
    <input type="password" id="MotDePasse" name="motdepasse" placeholder="Votre mot de passe..." minlength="8" pattern="(?=.*\d)(?=.*[\W_]).{7,}" required>
    <input type="checkbox" onclick="functionMDP()">
    <label for="VoirMDP" id="voirmdp">Voir le mot de passe</label>
    <label id="mdpoublie"><a href="mdpoublie_AAu.php" id="mdpoublie">Mot de passe oublié ?</a></label>
    <br>
    <br>
    <input type="checkbox" id="Souvenir" name="souvenir">
    <label for="Souvenir" id="souvenir">Se souvenir de moi</label>
    <br> <br>
    <input type="submit" value="Se connecter">
    <input type="reset" value="Réinitialiser l’affichage">
    <span id="motdepasse-error" class="error-message">Veuillez respecter le format requis pour le mot de passe : au moins 8 caractères, un chiffre et un caractère spécial.</span>
</form>

    </div>
</body>
<footer>
    <br>
    Crée par Arthur Augis
    <br>
</footer>
</html>