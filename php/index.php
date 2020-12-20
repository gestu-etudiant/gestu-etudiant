<!DOCTYPE html>
<html>
    <head>
        <title>Forum FAQ</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body id='bodyforum'>
        <!--Partie 1-->
        <div id="P1">
          <?php
            include('menu_nav.php');
          ?>
        <!--Ouvrir Compte-->
          <?php
            echo 'Bienvenu: $_SESSION["pseudo"]';
          ?>
    </body>
</html>