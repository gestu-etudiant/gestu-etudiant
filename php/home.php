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
            include('menu_nav.php');
          ?>
          </div>
          <div class="container" id='bgrd'>
            <div><a href='#' id='link'><h1 class='glyphicon glyphicon-facetime-video'></h1></a></div>
            <h2><b>Gëstu</b></h2>
            <h4>Votre satisfaction, notre fierté</h4>
            <div id='wideo'>
              <video controls='controls' id='video' poster='../images/1.jpg'>
                <source src='https://youtu.be/fjzRz8ngaos'>
                Il serait temps de mettre votre navigateur à jour
              </video>
            </div>
          </div>
          
          <div class='footer' id='footer'>
            <span>Contactez-nous ou joignez-nous sur les réseaux sociaux!!!</span>
            <div class='container-fluid'>
              <div class='row' id='pied'>
                <a href='mailto:14183945aliou@gmail.com'><img class="images" src='../images/gmail.png' alt='gmail'/></a>
                <a href='https://www.facebook.com/G%C3%ABstu-100792578027533/' target="_blank"><img class="images" src='../images/facebook.png' alt='facebook'/></a>
                <a href='#'><img class="images" src='../images/twitter.png' alt='twitter'/></a>
                <a href='https://www.linkedin.com/company/29350116' target='_blank'><img class="images" src='../images/linkedin.jpeg' alt='linkedin'/></a>
              </div>
            </div>  
          </div>
        
        <style>
          #wideo{
            text-align:center;
          }
          #wideo video{
            width:70%;
          }
          #bgrd{
            background-image:url('../images/bg.jpg');
            height:410px;
            background-size:100%;
            text-align:center;
            color:#50EE50;
          }
          #bgrd div a h1{
            font-size:100px;
            
          }
          #bgrd div a{
            color:#50EE50;
          }
          @media screen and (max-width:500px){
            #wideo #video{
            width:100%;
            height:100%;
            }
          }
        </style>
        <script>
          document.getElementById('wideo').style.display='none';
          var link=document.getElementById('link');
          link.addEventListener('click',lancer);
          function lancer(){
           document.getElementById('wideo').style.display='block';
           document.getElementById('bgrd').style.height='100%';
          }
        </script>
        <script src="../js/script.js"></script>
        
    </body>
</html>