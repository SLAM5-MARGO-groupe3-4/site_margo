<?php
//session_start();
require_once('include/head.php');

$nomColonne = array("Nom", "Prenom");
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
            <h1>Afficher une personne</h1>
            <div class="recherche">
                <form action="afficherPersonne.php" name ="formRechercherPers" method="post">
                    <label>Selectionner une catégorie :</label>
                    <select name="typeSelect">
                        <option value="etudiant">Etudiant</option>
                        <option value="prof">Professeur</option>
                        <option value="tech">Technicien</option>
                        <option value="admi">Administration</option>
                    </select>
                    </br>
                    <input id="btnAfficher" type="submit" value="Afficher" style="margin-left: 240px;width: 70px;">
                </form>

            </div>
        </section>
        <section>
            <?php
            $personne = $_POST["typeSelect"];
            $sql = "SELECT NOM, PRENOM FROM PERSONNE WHERE IDROLE IN (SELECT IDROLE FROM ROLE WHERE LIBELLE = " . $personne . ")";
            $r = mysql_query($sql, $link);
            $t = mysql_fetch_array($r);

            echo '<table id="" border="1">';
            echo '<th>nom</th><th>prenom</th>';
            while ($t = mysql_fetch_array($r)) {
                echo '<tr>';
                echo '<td>' . $t["NOM"] . '</td>';
                echo '<td>' . $t["PRENOM"] . '</td>';
                echo'</tr>';
            }
            echo '</table>';
            ?>
        </section>
        <footer>
            <p>LAURENT - LE ROUX - NOULET - URBAIN | Copyright 2014-2015</p>
        </footer>
    </body>
</html>