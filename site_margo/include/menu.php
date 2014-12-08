<script type="text/javascript" src="../js/verif.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<?php

//function menu($niv) {

$niv = $_SESSION['niveauAcces'];

$accueil = '<ul><li><a href="accueil.php" > Accueil </a></li>';
$edt = '<li><a href="emploiDuTemps.php" > Emploi du temps </a></li>';
$bul = '<li><a href="" > Bulletin </a></li>';
$compte = '<li><a href="compte.php" > Compte </a></li>';
$deco = '<li><a href="deconnexion.php" > Déconnexion </a></li></ul>';

switch ($niv) {
    case 1 : // Etudiants
        //Accueil
        echo $accueil .'<br />';
        // emploi du temps
        echo $edt .'<br />';
        // bulletin
        echo $bul .'<br />';
        echo $compte .'<br />';
        echo $deco .'<br />';
        break;
    case 2 : // Professeurs
        echo $accueil.'<br>';
        echo $edt.'<br>';
        echo $bul.'<br>';
        echo $compte.'<br>';
        echo $deco.'<br>';
        break;
    case 3 : //Techniciens
        echo $accueil.'<br>';
        echo $edt.'<br>';
        echo $compte.'<br>';
        echo $deco.'<br>';
        break;
    case 4 : //Admin
        echo $accueil.'<br>';
        echo $edt.'<br>';
        echo $bul.'<br>';
        echo $compte.'<br>';
        echo $deco.'<br>';
        break;
    default : //si lolo a pas fait son taff
        echo 'Il y a un problème avec votre compte, merci de contacter l\'<a href="mailto:toto@gmail.com?subject=PbNivAcces">administrateur</a>';
}
