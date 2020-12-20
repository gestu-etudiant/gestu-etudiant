<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body id='body_graph'>
        <div id="P2">
          <!--Menu-->
          <?php
            include('menu_nav.php');
          ?>
        </div>
        <div class='row'>
            <!--Première partie-->
            <!--div class='col-md-2' id='blog1'>
                <?php include('partie1.php');?>
            </div-->
            <!--Deuxième partie-->
            <div class='col-md-12' id='blog2'>
                <!--Première partie du deuxième-->
                <div class='row' id='design'>
                    <div class='col-md-3' id='model1'>Gëstulen gëstu rk mo am solo</div>
                    <div class='col-md-3' id='model2'>Gëstu, pour mieux vous servir</div>
                    <div class='col-md-3' id='model3'>Gëstu, votre satisfaction, notre fierté</div>
                </div>
                <!--Deuxième partie du deuxième-->
                <div class='container-fluid'>
                    <!--div class='row' id='graph_graph'>    
                        <div class='col-md-8'>
                            <-?php
                                echo "<img src='graph11.php' />";
                            ?>
                        </div>
                        <div class='col-md-3'>
                            <legend>Légende</legend>
                            <span id='p1'>Secteur primaire</span><br/>
                            <span id="p2">Secteur secondaire</span><br/>
                            <span id="p3">Secteur tertiaire</span><br/>
                            <span id="p4">Secteur quaternaire</span><br/>
                            <span id="p5">Travaille pas ou travaille plus</span><br/>
                        </div--> 
                        <div class='col-md-12' id='graph4'>
                            <?php
                                echo "<img src='graph12.php' />";
                            ?>
                        </div>   
                    </div>
                </div>
                <hr/>
                <div id='defiler'>
                    <h3>Graphes précédents/suivants</h3>
                    <a href='page1.php'>1</a><a href='page2.php'>2</a><a href='pagr3.php'>3</a><a href='#'>4</a><a href='#'>5</a><a href='#'>6</a><a href='#'>7</a><a href='#'>8</a><a href='#'>9</a><a href='#'>10</a>
                </div>
            </div>
        </div>
        <style>
            #defiler{
                text-align:center;
            }
            #defiler a{
                border-radius:100%;
                border:1px solid black;
                background-color:#15AA15;
                margin-left:2%;
                color:white;
            }
            #graph4{
                text-align:center;
            }
        </style>
    </body>
</html>