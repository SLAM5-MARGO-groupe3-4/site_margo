<?php
include('include/head.php');

$tabJours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi");
$tabHeures = array("8h-8h55", "8h55-9h", "9h-9h50", "10h05-11h", "11h-11h55", "11h55-12h50", "13h10-14h05", '14h05-15h', "15h15-16h10", "16h10-17h05", "17h05-18h");
$tabTout = array();
$espace='Emploi du temps';

$sqlEdt = "SELECT CODE_CLASSE FROM APPARTENIR WHERE IDPERS=".$id;
$rEdt = mysql_query($sqlEdt, $link);
$tLog = mysql_fetch_array($rEdt);

$sqlRelationEdt = "SELECT IDEDT FROM RELATION_EC WHERE CODE_CLASSE=".$tLog[0];
$rRelationEdt = mysql_query($sqlRelationEdt, $link);
$tRelationEdt = mysql_fetch_array($rRelationEdt);

$sqlRelationMj = "SELECT CODEMAT FROM RELATION_MJ WHERE IDEDT=".$tRelationEdt[0];
$rRelationMj = mysql_query($sqlRelationMj, $link);
$tRelationMj = mysql_fetch_array($rRelationMj);

$sqlClasse = "SELECT LIBELLE FROM CLASSE WHERE CODE_CLASSE=".$tRelationMj[0];
$rClasse = mysql_query($sqlClasse, $link);
$tClasse = mysql_fetch_array($rClasse);

$sqlJour="SELECT IDJOUR FROM REL_3 WHERE IDEDT=".$tRelationEdt;
$rJour = mysql_query($sqlJour, $link);
$tJour = mysql_fetch_array($rJour);

$sqlLib = "SELECT LIBELLE FROM JOUR WHERE IDJOUR=".$tJour[0];
$rLib = mysql_query($sqlLib, $link);
$tLib = mysql_fetch_array($rLib);



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
        <title><?php echo $espace ?></title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <h2>Margo</h2>
            </div>
            <div class="espace">
                <div class="titre">
                    <h2><?php echo $espace ?></h2>
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
                    echo '<td>' . $tClasse . '</td>';
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