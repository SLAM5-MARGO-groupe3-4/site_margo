<?php
session_start();
$login = $_SESSION['login'];
$id = $_SESSION['id'];
$niveauAcces = $_SESSION['niveauAcces'];
            
require_once('menu.php');
require_once('connexion.php');
//require_once('fonction.php');
?>
<script type="text/javascript" src="../js/verif.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css">
