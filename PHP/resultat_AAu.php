<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Résultat - Lion des Flandres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Importation de Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <div class="container" id="black">
    Votre identifiant : <?php echo $_POST['identifiant']; ?> <br />
    Votre mot de passe : <?php echo $_POST['motdepasse']; ?> <br />

    Votre mot de passe hascher SHA-256 :
    <?php
        echo hash('sha256', $_POST['motdepasse']);
    ?>
    <br />
    Adresse IP et port serveur :
    <?php
        echo $_SERVER['HTTP_HOST'];
    ?>
    :
    <?php
        echo $_SERVER['SERVER_PORT'];
    ?>
    <br />
    OS du poste de travail :
    <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Windows') !== false) {
            $os = 'Windows';
        } elseif (strpos($user_agent, 'Mac OS X') !== false) {
            $os = 'Mac OS X';
        } elseif (strpos($user_agent, 'Linux') !== false) {
            $os = 'Linux';
        } else {
            $os = 'Unknown';
        }
        echo $os;
    ?>
    <br />
    Nom du logiciel du serveur Web :
    <?php
        echo $_SERVER["SERVER_SOFTWARE"];
    ?>
    <br /> 
    Navigateur du poste de travail : 
    <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Firefox') !== false) {
            $browser = 'Firefox';
        } elseif (strpos($user_agent, 'Chrome') !== false) {
            $browser = 'Chrome';
        } elseif (strpos($user_agent, 'Safari') !== false) {
            $browser = 'Safari';
        } elseif (strpos($user_agent, 'Opera') !== false) {
            $browser = 'Opera';
        } elseif (strpos($user_agent, 'MSIE') !== false) {
            $browser = 'Internet Explorer';
        } else {
            $browser = 'Unknown';
        }
        echo $browser;
    ?>
    <br />
    Langue du navigateur :
    <?php
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?>
    <br />
    Nom du poste de travail :
    <?php
        echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
    ?>
    <br />
    Adresse IP du poste de travail :
    <?php
        echo $_SERVER['REMOTE_ADDR']
    ?>
    <br />
    OS du serveur :
    <?php
        echo php_uname();
    ?>
    </div>
</body>
<footer>
    <br>
    Crée par Arthur Augis
    <br>
</footer>
</html>