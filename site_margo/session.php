<?php

include('include/connexion.php');

$log = $_POST['login'];
$mdp = $_POST['pwd'];


$sqlLog = "SELECT IDPERS, IDROLE FROM PERSONNE WHERE LOGIN='$log'";
$rLog = $r = mysql_query($sqlLog, $link);
$tLog = mysql_fetch_array($rLog);

$sqlMdp = "SELECT IDPERS FROM PERSONNE WHERE MOTDEPASSE='$mdp'";
echo $sqlMdp;
$rMdp = $r = mysql_query($sqlMdp, $link);
$tMdp = mysql_fetch_array($rMdp);

if ($tLog != null) {
    if ($tMdp != null) {
        if ($tLog['id'] == $tMdp['id']) {
            session_start();
//            define('login', $log);
//            define('id', $tLog['id']);
//            define('niveauAcces', $tLog['idRole']);
            $_SESSION['login'] = $log;
            $_SESSION['id'] = $tLog['IDPERS'];
            $_SESSION['niveauAcces'] = $tLog['IDROLE'];
            
            //include('accueil.php');
            header('Location:accueil.php');
        } else {
            echo 'Le compte et le Mot de passe ne correspondent pas !';
            //include('public/index.php');
            header('Location:public/index.php');
        }
    } else {
        echo 'Le mot de passe n\'est pas le bon';
        header('Location:public/index.php');
    }
} else {
    echo 'Le nom de compte n\'existe pas';
    //include('public/index.php');
    header('Location:public/index.php');
}
?>