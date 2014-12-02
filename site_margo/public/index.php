<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur MARGO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<script type="text/javascript" src="../js/verif.js"></script>-->
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        
        
        
    </head>
    <body>
        <header>
            <div class="logo">
                <h2>Margo</h2>
            </div>
            <div class="espace">
                <div class="titre">
                    <h2>Espace Enseignants</h2>
                </div>
                <div class="compte">
                    <a href="#"><span>Mon compte</span></a>
                    <a href="#"><span>Deconnexion</span></a>
                </div>
            </div>
        </header>
        <!--<aside>
            <h4>Menu principal</h4>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Enseignement</a></li>
                <li><a href="#">Filières</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Élèves</a></li>
            <ul>
        </aside>-->
        <section>
            <h1>Connexion</h1>
            <!--<form action="#" name ="formloginMdp" method="post">
                <div align="center">
                    <p><label>login</label><input type="text" id="txtLogin"></p>
                    <p><label>mot de passe</label><input type="password" id="pwdMdp"></p>
                    <input type="sumbit" value="Vérifier" id="btnVerif" style="margin-left: 240px;width: 70px;" >
                </div>
            </form>-->
             <form action="../session.php" name ="formloginMdp" method="post">
                <div align="center">
                    <p>
                        <label>login</label>
                        <input type="text" id="txtLogin" name='login'>
                    </p>
                    <p>
                        <label>mot de passe</label>
                        <input type="password" id="pwdMdp" name='pwd'>
                    </p>
                    <!--<button type="submit" value="Vérifier" id="btnVerif" style="margin-left: 240px;width: 70px;">-->
                     <input id="btnVerif" type="submit" value="Vérifier" style="margin-left: 240px;width: 70px;">
                </div>
            </form>
        </section>
    </body>
</html>
