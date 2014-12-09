<?php
include('include/head.php');
$espace = "Notes";

$tabMat = array();

if ($niveauAcces == 4) {
    $sqlNote = "SELECT * FROM NOTES WHERE IDPERS =" . $id;
    echo $sqlNote;
    $rNote = mysql_query($sqlNote, $link);
    while ($tNote = mysql_fetch_array($rNote)) {
        $sqlMat = "SELECT * FROM MATIERE WHERE CODEMAT=".$tNote["CODEMAT"];
        $rMat = mysql_query($sqlMat, $link);
        $tMat = mysql_fetch_array($rMat);
        $tabMat[] = $tMat["LIBMAT"];
    }
}
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
            echo '<table id="idTableNote" border="1">';
            echo '<th>Matiere</th><th>Note</th>';
            for ($i = 0; $i < count($tabMat); $i++) {
                echo '<tr>';
                echo '<td>' . $tabMat[$i] . '</td>';
                while ($tNote = mysql_fetch_array($rNote)) {
                    $notes += (string) $tNote['NOTE'];
                }
                echo '<td>' . $notes . '</td>';
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