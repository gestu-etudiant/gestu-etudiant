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
                    <div class='row' id='graph_graph'>
                        <div class='col-md-5' id='graph8'>
                            <?php
                                echo "<img src='graph9.php' />";
                            ?>
                        </div>
                        <div class='col-md-5' id='graph12'>
                            <?php
                                echo "<img src='graph1.php' />";
                            ?>
                        </div>
                        <div class='col-md-2'>
                            <legend>Légende</legend>
                            <span id='p1'>Site VCN</span><br/>
                            <span id="p2">Hotel du rail</span><br/>
                            <span id="p3">Campus social des amicales</span><br/>
                            <span id="p4">Location</span><br/>
                            <span id="p5">Parent ou tuteur</span><br/>
                        </div> 
                           
                    </div>
                </div>
                <hr/>
                <div id='defiler'>
                    <h3>Graphes précédents/suivants</h3>
                    <a href='page1.php'>1</a><a href='page2.php'>2</a><a href='pagr3.php'>3</a><a href='page4.php'>4</a><a href='page5.php'>5</a><a href='page6.php'>6</a><a href='page7.php'>7</a><a href='page8.php'>8</a><a href='page9.php'>9</a><a href='page10.php'>10</a>
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
            #graph1,#graph8{
                text-align:center;
            }
        </style>
    </body>
</html>