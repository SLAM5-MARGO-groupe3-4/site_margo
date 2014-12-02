<script type="text/javascript" src="../js/verif.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<?php

//function menu($niv) {

$niv = $_SESSION['niveauAcces'];

$accueil = '<a href="../accueil.php" > Accueil </a>';
$edt = '<a href="" > Emploi du temps </a>';
$bul = '<a href="" > Bulletin </a>';
$compte = '<a href="" > </a>';
$deco = '<a href="deconnexion.php" > Déconnexion </a>';

switch ($niv) {
    case 1 : // Etudiants
        //Accueil
        echo $accueil;
        // emploi du temps
        echo $edt;
        // bulletin
        echo $bul;
        echo $compte;
        echo $deco;
        break;
    case 2 : // Professeurs
        echo $accueil;
        echo $edt;
        echo $bul;
        echo $compte;
        echo $deco;
        break;
    case 3 : //Techniciens
        echo $accueil;
        echo $edt;
        echo $compte;
        echo $deco;
        break;
    case 4 : //Admin
        echo $accueil;
        echo $edt;
        echo $bul;
        echo $compte;
        echo $deco;
        break;
    default : //si lolo a pas fait son taff
        echo 'Il y a un problème avec votre compte, merci de contacter l\'<a href="mailto:toto@gmail.com?subject=PbNivAcces">administrateur</a>';
}

//}
?>
