<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur MARGO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        
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
