<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur MARGO</title>
        <meta charset="utf-8" >
        <script type="text/javascript" src="../js/verif.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <?php
            require_once('../include/header.php');
            ?>
        </header>
        <aside>
        </aside>
        <section>
            <h1>Connexion</h1>
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
                    <input id="btnVerif" type="submit" value="Vérifier" style="margin-left: 240px;width: 70px;">
                </div>
            </form>
        </section>
        <footer>
            <p>LAURENT - LE ROUX - NOULET - URBAIN</p>
            <p>Copyright 2014-2015</p>
        </footer>
    </body>
</html>
