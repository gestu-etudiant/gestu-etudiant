<!DOCTYPE html>
<html>
    <head>
        <title>Résultats Statistiques</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body>

        <div id="P2">
          <!--Menu-->
          <?php
            include('menu_nav.php');
          ?>
            <div class="container">
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <!--img src="../images/1.jpg" alt="img1" style='height:600px'-->
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
                                echo "<img src='graph8.php' />";
                            ?>
                        </div>
                        <div class='col-md-5' id='graph1'>
                            <?php
                                echo "<img src='graph1.php' />";
                            ?>
                        </div>
                        <div class='col-md-2'>
                            <legend>Légende</legend>
                            <span class='jaune'>a </span><span id='p1'>Site VCN</span><br/>
                            <span class='bleu'>a </span><span id="p2">Hotel du rail</span><br/>
                            <span class='vert'>a </span><span id="p3">Campus social des amicales</span><br/>
                            <span class='rouge'>a </span><span id="p4">Location</span><br/>
                            <span class='marron'>a </span><span id="p5">Parent ou tuteur</span><br/>
                        </div> 
                           
                    </div>
                </div>
                <hr/>
                <!--div id='defiler'>
                    <h3>Graphes précédents/suivants</h3>
                    <a href='#'>1</a><a href='page2.php'>2</a><a href='pagr3.php'>3</a><a href='page4.php'>4</a><a href='#'>5</a><a href='#'>6</a><a href='#'>7</a><a href='#'>8</a><a href='#'>9</a><a href='#'>10</a>
                </div-->
            </div>
        </div>
        <!--div class="carousel-caption">
          <h3>Gëstu</h3>
          <p>Comprendre le problème des étudiants devient chose facile</p>
        </div-->
      </div>

      <div class="item">
        <!--img src="../images/2.jpg" alt="img2" style='height:600px'-->
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
                <div class='row' id='graph_graph'>    
                    <div class='col-md-6' id='graph6'>
                        <?php
                            echo "<img src='graph6.php' />";
                        ?>
                    </div>
                    <div class='col-md-6' id='graph7'>
                        <?php
                            echo "<img src='graph7.php' />";
                        ?>
                    </div> 
                </div>
                <hr/>
                <!--div id='defiler'>
                    <h3>Graphes précédents/suivants</h3>
                    <a href='page1.php'>1</a><a href='#'>2</a><a href='pagr3.php'>3</a><a href='page4.php'>4</a><a href='#'>5</a><a href='#'>6</a><a href='#'>7</a><a href='#'>8</a><a href='#'>9</a><a href='#'>10</a>
                </div-->
            </div>
        </div>            
        <!--div class="carousel-caption">
          <h3>Gëstu</h3>
          <p>Un diagramme bien fait vaut mille tableaux.</p>
        </div-->
      </div>
    
      <div class="item">
        <!--img src="../images/images.jpg" alt="img3" style='height:600px'-->
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
                         
                        <div class='col-md-9' id='graph10'>
                            <?php
                                echo "<img src='graph10.php' />";
                            ?>
                        </div>
                        <div class='col-md-3'>
                            <legend>Légende</legend>
                            <b>Logement:</b><br>
                            <span class='jaune'>a </span><span id='p1'>Site VCN</span><br/>
                            <span class='bleu'>a </span><span id="p2">Hotel du rail</span><br/>
                            <span class='vert'>a </span><span id="p3">Campus social des amicales</span><br/>
                            <span class='rouge'>a </span><span id="p4">Location</span><br/>
                            <span class='marron'>a </span><span id="p5">Parent ou tuteur</span><br/>
                            <b>Revenu:</b><br>
                            <span class='jaune'>a </span><span id='p1'>Supérieur à 40000 frcs</span><br/>
                            <span class='bleu'>a </span><span id="p2">Inférieur à 40000 frcs</span><br/>
                            <b>Satisfaction logement:</b><br>
                            <span class='jaune'>a </span><span id='p1'>Tres Satisfait</span><br/>
                            <span class='bleu'>a </span><span id="p2">Satisfaitl</span><br/>
                            <span class='vert'>a </span><span id="p3">Normal</span><br/>
                            <span class='rouge'>a </span><span id="p4">Insatisfait</span><br/>
                            <span class='marron'>a </span><span id="p5">Pas du tout satisfait</span><br/>
                            <b>Secteur où évolue le papa:</b><br>
                            <span class='jaune'>a </span><span id='p1'>Secteur primaire</span><br/>
                            <span class='bleu'>a </span><span id="p2">secteur secondaire</span><br/>
                            <span class='vert'>a </span><span id="p3">Secteur tertiaire</span><br/>
                            <span class='rouge'>a </span><span id="p4">Secteur quaternaire</span><br/>
                            <span class='marron'>a </span><span id="p5">Travaille pas/Travaille plus</span><br/>
                        </div>
                          
                    </div>
                </div>
                <hr/>
                <!--div id='defiler'>
                    <h3>Graphes précédents/suivants</h3>
                    <a href='page1.php'>1</a><a href='page2.php'>2</a><a href='#'>3</a><a href='page4.php'>4</a><a href='#'>5</a><a href='#'>6</a><a href='#'>7</a><a href='#'>8</a><a href='#'>9</a><a href='#'>10</a>
                </div-->
            </div>
        </div>
        <!--div class="carousel-caption">
          <h3>Gëstu</h3>
          <p>Pour mieux vous servir.</p>
        </div-->
      </div>

      <div class="item">
        <!--img src="../images/3.jpg" alt="img4" style='height:600px'-->
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
                <!--div id='defiler'>
                    <h3>Graphes précédents/suivants</h3>
                    <a href='page1.php'>1</a><a href='page2.php'>2</a><a href='pagr3.php'>3</a><a href='#'>4</a><a href='#'>5</a><a href='#'>6</a><a href='#'>7</a><a href='#'>8</a><a href='#'>9</a><a href='#'>10</a>
                </div-->
            </div>
        </div>
        <!--div class="carousel-caption">
          <h3>Gëstu</h3>
          <p>çaytu mbirum ndaw gni, sunu yitei.</p>
        </div-->
      </div>
        <div id="bouton_droite">
          <button class='btn btn-success glyphicon glyphicon-print' id='bouton'> Imprimer</button>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" id="left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" id='right'></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>
  $(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
      
    // Enable Carousel Indicators
    $(".item1").click(function(){
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
      $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
      $("#myCarousel").carousel(3);
    });
      
    // Enable Carousel Controls
    $(".left").click(function(){
      $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
      $("#myCarousel").carousel("next");
    });
});
</script>
<style>
  .carousel-indicators li, #right, #left{
    background-color:black;
  }
  .bleu{
    width:40px;
    height:20px;
    background-color:blue;
    color:blue;
    border:1px solid blue;
  }
  .jaune{
    width:40px;
    height:20px;
    background-color:yellow;
    color:yellow;
    border:1px solid yellow;
  }
  .vert{
    width:40px;
    height:20px;
    background-color:greenyellow;
    color:greenyellow;
    border:1px solid greenyellow;
  }
  .rouge{
    width:40px;
    height:20px;
    background-color:red;
    color:red;
    border:1px solid red;
  }
  .marron{
    width:40px;
    height:20px;
    background-color:rgb(241, 237, 184);
    color:rgb(241, 237, 184);
    border:1px solid rgb(241, 237, 184); 

  }
  #bouton_droite{
    text-align:center;
  }
</style>
        <script>
          var imprimer=document.getElementById('bouton');
          imprimer.addEventListener('click', imprim);
          function imprim(e) {
            e.preventDefault();
            window.print();
          }
        </script>
        <script src="../js/script.js"></script>
        
    </body>
</html>