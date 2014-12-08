<?php
include('include/head.php');
$espace = "Modification du compte";

$func = $_GET["func"];

if($func=="modification"){
    $nom = $_POST["idNom"];
    $prenom = $_POST["idPrenom"];
    
    $sqlUpdate = "UPDATE Personne SET nom='".$nom."', prenom='".$prenom."' WHERE  id=".$id;
    $r = mysql_db_query($cfgBase, $sqlUpdate);
    
    
}


$sql = "SELECT * FROM Personne WHERE id =" . $id;
$r = mysql_query($sql, $link);
$t = mysql_fetch_array($r);
?>

<form action="?func=modification" name ="formCompte" method="post">
    <label>Nom : </label>
    <input type="text" id="idNom" name="idNom" value="<?php echo $t["nom"] ?>"> <br />

    <label>Prenom :</label>
    <input type="text" id="idPrenom" name="idPrenom" value="<?php echo $t["prenom"] ?>"> <br />
    
    <button type="submit"> Modifier</button>
</form>



