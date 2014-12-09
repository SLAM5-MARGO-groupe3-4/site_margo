<?php
include('include/head.php');
$espace = "Modification du compte";

if(isset($_GET["func"])){
    $func = $_GET["func"];
    if($func=="modification"){
        $nom = $_POST["idNom"];
        $prenom = $_POST["idPrenom"];
        $situation = $_POST["idSituation"];
        $adr = $_POST["idAdr"];
        $mail = $_POST["idMail"];
        $login = $_POST["idLogin"];
        $mdp = $_POST["idMdp"];
        $confMdp = $_POST["idConfMdp"];
        
        if(!empty($nom)){
            if(!empty($prenom)){
                if(!empty($adr)){
                    if(!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)){
                        if(!empty($login)){
                            if(!empty($mdp) && $mdp == $confMdp){
                                $sqlUpdate = "UPDATE PERSONNE SET nom='".$nom."', prenom='".$prenom;
                                if(!empty($situation)){
                                    $sqlUpdate .= "', situation='".$situation;
                                }
                                $sqlUpdate .= "', adr='".$adr."', adressemail='".$mail."', login='".$login.
                                        "', motdepasse='".$mdp."' WHERE  idPers=".$id;
                                $r = mysql_db_query($cfgBase, $sqlUpdate);
                            } else{
                                echo "Modification impossible, le <strong>mot de passe</strong> ne doit pas être vide";
                            }
                        } else{
                            echo "Modification impossible, le <strong>login</strong> ne doit pas être vide";
                        }
                    } else{
                        echo "Modification impossible, l'<strong>adresse e-mail</strong> ne doit pas être vide";
                    }
                } else{
                    echo "Modification impossible, l'<strong>adresse</strong> ne doit pas être vide";
                }
            } else{
                echo "Modification impossible, le <strong>prénom</strong> ne doit pas être vide";
            }
        } else{
            echo "Modification impossible, le <strong>nom</strong> ne doit pas être vide";
        }
    }
}
$sql = "SELECT * FROM PERSONNE WHERE IDPERS =" . $id;
$r = mysql_query($sql, $link);
$t = mysql_fetch_array($r);
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
            <h1>Votre Compte</h1>
            <form action="?func=modification" name ="formCompte" method="post">
                <div align="center">
                    <p>
                        <label>Nom : </label>
                        <input type="text" id="idNom" name="idNom" value="<?php echo $t["NOM"]; ?>">
                    </p>
                    <p>
                        <label>Prenom :</label>
                        <input type="text" id="idPrenom" name="idPrenom" value="<?php echo $t["PRENOM"]; ?>">
                    </p>
                    <p>
                        <label>Situation Familliale :</label>
                        <input type="text" id="idSituation" name="idSituation" value="<?php echo $t["SITUATION"]; ?>">
                    </p>
                    <p>
                        <label>Adresse :</label>
                        <input type="text" id="idAdr" name="idAdr" value="<?php echo $t["ADR"]; ?>">
                    </p>
                    <p>
                        <label>Adresse Mail :</label>
                        <input type="text" id="idMail" name="idMail" value="<?php echo $t["ADRESSEMAIL"]; ?>">
                    </p>
                    <p>
                        <label>Login :</label>
                        <input type="text" id="idLogin" name="idLogin" value="<?php echo $t["LOGIN"]; ?>">
                    </p>
                    <p>
                        <label>Mot de passe :</label>
                        <input type="password" id="idMdp" name="idMdp" value="<?php echo $t["MOTDEPASSE"]; ?>">
                    </p>
                    <p>
                        <label>Confirmation Mot de passe :</label>
                        <input type="password" id="idConfMdp" name="idConfMdp"value="<?php echo $t["MOTDEPASSE"]; ?>">
                    </p>
                    <button type="submit"> Modifier</button>
                </div>
            </form>
        </section>
        <footer>
            <p>LAURENT - LE ROUX - NOULET - URBAIN | Copyright 2014-2015</p>
        </footer>
    </body>
</html>



