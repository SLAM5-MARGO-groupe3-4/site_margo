<?php

$cfgBase = "site_margo"; 
$cfgUser = "root";  
$cfgPass = "joliverie"; 
$cfgHote = "localhost"; 

$link = mysql_connect($cfgHote,$cfgUser,$cfgPass) or die("erreur de connexion");   
if (!mysql_select_db($cfgBase, $link)) {
    echo 'Sélection de base de données impossible!';
    exit;
}
mysql_query("SET NAMES UTF8");

?>



