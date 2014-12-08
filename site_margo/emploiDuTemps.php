<?php
include('include/head.php');

$tabJours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi");
$tabHeures = array("8h-8h55", "8h55-9h", "9h-9h50", "10h05-11h", "11h-11h55", "11h55-12h50", "13h10-14h05", '14h05-15h', "15h15-16h10", "16h10-17h05", "17h05-18h");

/* echo '<table border="1">';
  echo '<th></th>';
  for ($i=0;$i<count($tabJours);$i++){
  echo '<th>' . $tabJours[$i] . '</th>';
  }

  for($j=0;$j<count($tabHeures);$j++){
  echo '<tr>';
  echo '<td>' . $tabHeures[$j] . '</td>';
  for ($i=0;$i<count($tabJours);$i++){
  echo '<td>' . '' . '</td>';
  }
  echo'</tr>';
  } */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Emploi du temps</title>
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
            <?php include('include/menu.php') ?>
        </aside>
        <section> 
            <?php
            echo '<table id="idTableEDT" border="1">';
            echo '<th></th>';
            for ($i = 0; $i < count($tabJours); $i++) {
                echo '<th>' . $tabJours[$i] . '</th>';
            }

            for ($j = 0; $j < count($tabHeures); $j++) {
                echo '<tr>';
                echo '<td>' . $tabHeures[$j] . '</td>';
                for ($i = 0; $i < count($tabJours); $i++) {
                    echo '<td>' . 't' . '</td>';
                }
                echo'</tr>';
            }
            echo '</table>';
            ?>
        </section>
        <footer>
            <p>LAURENT - LE ROUX - NOULET - URBAIN</p>
            <p>Copyright 2014-2015</p>
        </footer>
    </body>
</html>