<?php
session_start();
$login = $_SESSION['login'];
$id = $_SESSION['id'];
$niveauAcces = $_SESSION['niveauAcces'];
            

require_once('connexion.php');
//require_once('fonction.php');
?>
<meta charset="utf-8" >
<script type="text/javascript" src="js/verif.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css">