<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body>
        <div id="P2">
          <!--Menu-->
          <?php
            include('menu_nav.php')
          ?>
        </div>
        <div class='row'>
        <div class='col-sm-8'>
            <?php
                echo "<img src='graph11.php' />";
            ?>
        </div>
        <div class='col-sm-4'>
            <legend>Légende</legend>
            <span id='p1'>Site VCN</span><br/>
            <span id="p2">Hotel du rail</span><br/>
            <span id="p3">Campus social des amicales</span><br/>
            <span id="p4">Location</span><br/>
            <span id="p5">Parent ou tuteur</span><br/>
        </div>    
        </div>
        <hr/>
        <h3>Interprétation</h3>
    </body>
</html>