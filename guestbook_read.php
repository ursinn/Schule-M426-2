<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>PHP-GmbH Home</title>
    </head>
    <body>
        <!-- Firmen Bild -->
        <header>
            <img src="img/banner.gif">
        </header>
        <!-- Navigation -->
        <nav>
            <img src="img/tomcat.gif">
            <a href="index.html">
                <img src="img/home.gif">
            </a>
            <a href="#">
                <img src="img/guestbook.gif">
            </a>
            <a href="registr.php">
                <img src="img/witze.gif">
            </a>
        </nav>
        <!-- Main der Seite -->
        <main>
            <h1>Gästebuch</h1>
            <p>[<a href="guestbook.php">Gästebuch schreiben</a>]</p>
            <br>
            <p>
              <!-- Gäste Buch wird ausgelesen -->
            <?php
                readfile('guestbook.txt');
            ?>
            </p>
            <br>
        </main>
        <footer>
            <img src="img/jakarta-banner.gif">
        </footer>
    </body>
</html>
