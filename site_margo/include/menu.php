<?php
//function menu($niv) {
    
    $niv = $_SESSION['niveauAcces'];
    
    $accueil = '<a href="../accueil.php" > Accueil </a>';
    $edt = '<a href="" > Emploi du temps </a>';
    $bul = '<a href="" > Bulletin </a>';
    
    switch ($niv) {
        case 1 : // Etudiants
            //Accueil
            echo $accueil;
            // emploi du temps
            echo $edt;
            // bulletin
            echo $bul;
        case 2 : // Professeurs
            echo $accueil;
            echo $edt;
            echo $bul;
        case 3 : //Techniciens
            echo $accueil;
            echo $edt;
        case 4 : //Admin
            echo $accueil;
            echo $edt;
            echo $bul;
        default : //si lolo a pas fait son taff
            echo 'Il y a un problème avec votre compte, merci de contacter l\'<a href="mailto:toto@gmail.com?subject=PbNivAcces">administrateur</a>';            
    }
    
//}

?>
