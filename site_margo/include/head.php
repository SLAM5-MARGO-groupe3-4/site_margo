<?php
session_start();
$login = $_SESSION['login'];
$id = $_SESSION['id'];
$niveauAcces = $_SESSION['niveauAcces'];
            

require_once('connexion.php');
//require_once('fonction.php');
?>
<script type="text/javascript" src="../js/verif.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css">

<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->