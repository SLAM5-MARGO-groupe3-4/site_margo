<script type="text/javascript" src="../js/verif.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<?php
//function menu($niv) {

$niv = $_SESSION['niveauAcces'];

$accueil = '<div class="menu"><a href="accueil.php" class="home"> Accueil </a></br>';
$edt = '<a href="emploiDuTemps.php" class="calendar"> Emploi du temps </a></br>';
$bul = '<a href="" class="list"> Bulletin </a></br>';
$compte = '<a href="compte.php" class="user"> Compte </a></br>';
$deco = '<a href="include/deconnexion.php" class="off"> Déconnexion </a></br></div>';

switch ($niv) {
    case 1 : // Etudiants
        //Accueil
        echo $accueil . '<br />';
        // emploi du temps
        echo $edt . '<br />';
        // bulletin
        echo $bul . '<br />';
        echo $compte . '<br />';
        echo $deco . '<br />';
        break;
    case 2 : // Professeurs
        echo $accueil . '<br>';
        echo $edt . '<br>';
        echo $bul . '<br>';
        echo $compte . '<br>';
        echo $deco . '<br>';
        break;
    case 3 : //Techniciens
        echo $accueil . '<br>';
        echo $edt . '<br>';
        echo $compte . '<br>';
        echo $deco . '<br>';
        break;
    case 4 : //Admin
        echo $accueil . '<br>';
        echo $edt . '<br>';
        echo $bul . '<br>';
        echo $compte . '<br>';
        echo $deco . '<br>';
        break;
    default : //si lolo a pas fait son taff
        echo 'Il y a un problème avec votre compte, merci de contacter l\'<a href="mailto:toto@gmail.com?subject=PbNivAcces">administrateur</a>';
}
