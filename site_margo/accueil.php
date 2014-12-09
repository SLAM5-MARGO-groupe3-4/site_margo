<?php
//session_start();
require_once('include/head.php');
$niv = $_SESSION['niveauAcces'];

$texteAdmin = "<h2>Depuis ce site, vous pouvez :<ul><li>Accèder à votre emploi du temps</li><li>Rechercher une personne</li><li>Voir vos notes</li><li>Voir et rechercher vos informations personnelles</li></ul></h2>";
$texteEtu = "<h2>Depuis ce site, vous pouvez :<ul><li>Accèder à votre emploi du temps</li><li>Voir vos notes</li><li>Voir et rechercher vos informations personnelles</li></ul></h2>";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur MARGO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <header>
            <div class="logo">
                <h2>Margo</h2>
            </div>
            <div class="espace">
                <div class="titre">
                    <h2>Bienvenue sur MARGO</h2>
                </div>
            </div>
        </header>
        <aside>
            <?php
            require_once('include/menu.php');
            ?>
        </aside>
        <section>
            <h1>Accueil</h1>
            <?php
            switch ($niv) {
                case 1 : // Admin
                    echo $texteAdmin;
                    break;
                case 2 : // Professeurs
                    echo $texteAdmin;
                    break;
                case 3 : //Techniciens
                    echo $texteAdminA;
                    break;
                case 4 : //Etudiants
                    echo $texteEtu;
                    break;
                default :
                    echo "Erreur";
            }
            ?>
        </section>
        <footer>
            <p>LAURENT - LE ROUX - NOULET - URBAIN | Copyright 2014-2015</p>
        </footer>
    </body>
</html>