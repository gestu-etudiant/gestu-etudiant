<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body id='body_forum'>
        <div id="P2">
          <!--Menu-->
          <?php
            include('menu_nav.php');
          ?>
        </div>
        <div id='categorie'>
                <form class="form" method="POST" action="connexion.php">
                    <div class='container-fluid'>
                        <div id="ouvc" class="row">
                            <div class="categorie">
                                <input type="text" id="prone" name="pseudo" placeholder="Pseudonyme"><br><br>
                                <textarea id="com" name="messages" placeholder="Nouveau Commentaire"></textarea>
                                <button type="submit" name="OK" id="OK">OK</button><br/><br>
                            </div>
                            
                        </div>
                    </div>
                </form>
        </div>

        <?php
            require('connexionBD.php');
            try {
                // Connexion à MySQL 
                $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
                }
                catch(Exception $e) { // Message en cas d'erreur 
                    die('Erreur : '.$e->getMessage()); }
                
                $pseudonyme;   
                    /*$reponse5 = $bdd->query('SELECT pseudo  FROM categorie WHERE pseudo=$ ' );
                    // On affiche chaque entrée une à une 
                    while ( $donnees = $reponse5->fetch() ) { 
                        $a=$donnees['pseudo'];
                     }*/

            //Inscription
            if(isset($_POST['submit'])){
                if(isset($_POST['pseudo'],$_POST['adr'],$_POST['tel'],$_POST['pswrd'])){
                    if($_POST['pseudo']!=''&& $_POST['adr']!=''&& $_POST['tel']!=''&& $_POST['pswrd']!=''){
                        
                        $pseudo=$_POST['pseudo'];
                        $adr=$_POST['adr'];
                        $tel=$_POST['tel'];
                        $pswrd=$_POST['pswrd'];

                        $insertion = "INSERT INTO forum (pseudo,adresse,tel,passe) VALUES ('$pseudo','$adr','$tel','$pswrd')";

                        $execute=$bd->query($insertion);

                        if($execute==true){
                            $msgSuccess='<h3>Bienvenu parmi nous ';
                            echo $msgSuccess.'<b class="prenom">'.$pseudo.'</b></h3>';
                            $prenom=$pseudo;
                            $pseudonyme=$pseudo;
                            //echo'';
                        }else{
                            echo "<script type='text/javascript'>document.location.replace('forum.php');</script>";
                }
            }
        }
    }
    
    //Connexion
    if (isset($_POST['connexion']))
            {
                if (!empty($_POST['adresse']) AND !empty($_POST['pswrde']))
                {
                   // $adresse = get($_POST['adresse']);
                    $adresse= $_POST['adresse'];
                    $passe=$_POST['pswrde'];
                    $pass_hache=password_hash($_POST['pswrde'], PASSWORD_DEFAULT);

                    $req = $bdd->prepare('SELECT adresse, passe, pseudo FROM forum WHERE adresse="'.$adresse.'"');
                    $req-> execute(array(
                        'adresse' => $adresse,
                        'passe'=>$passe));
 
                    $resultat = $req->fetch();
 
                     
                    if ($resultat['adresse']!=$adresse OR $passe!=$resultat['passe'])
                    {
                        echo "<script type='text/javascript'>document.location.replace('forum.php');</script>";
                        //echo '<b>Identifiant et/ou Mot De Passe incorrect.<br/>'.$resultat['adresse'].' </b>'.$passe.' '.$adresse.' '.$resultat['passe'];
                    }
                    else
                    {
                        //header('Location: connexion.php');
                        //echo '<b>Vous êtes connecté ! :-)<br/><a href="connexion.php">Cliquez ici pour continuer</a></b>';
                        //echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
                        echo '<h3 id="belle">Heureux de vous retrouver <b class="prenom">'.$resultat['pseudo'].'</b></h3>';
                        $prenom=$resultat['pseudo'].'';
                        $pseudonyme=$resultat;

                    }
                    $req->closeCursor();
                }
                else
                {
                    echo "<script type='text/javascript'>document.location.replace('forum.php');</script>";
                    //echo '<b>Renseignez tous les champs.<br/><b/>';
                }
            }

    //Connexion
    if(isset($_POST['OK'])){
                if(isset($_POST['pseudo'],$_POST['messages'])){
                    if($_POST['pseudo']!=''&& $_POST['messages']!=''){
                        
                        $pseudon=addslashes($_POST['pseudo']);
                        $messges=addslashes($_POST['messages']);

                        date_default_timezone_set('GMT');
                        $date=date("d-m-Y");
                        $heure=date("H:i");
                        $af='Le:'.$date.' a '.$heure;

                        $insertion = "INSERT INTO categorie (messages,pseudo,dates) VALUES ('$messges','$pseudon','$af')";

                        $execute=$bd->query($insertion);

                        if($execute==true){
                            $msgSuccess='Bienvenu parmi nous ';
                            
                        }else{
                        $msgError="L'enrégistrement n'est pas effectué";
                }
            }
        }
    }

    //if (isset($_POST['OK'])){
        //Récupération messages
        $reponse=$bdd->query('SELECT messages, pseudo, dates FROM categorie ORDER BY id DESC LIMIT 0, 20');
        //Affichages des messages
        while($donnees=$reponse->fetch()){
            
            echo '<div class="categories"><p class="glyphicon glyphicon-user"><strong id="strong">'.htmlspecialchars($donnees['pseudo']).':</strong><br>
                '.$donnees['messages'].'</p><br>
                <div><span class="aime glyphicon glyphicon-thumbs-up" id="aime">0 </span> <span id="aimepas" class="aimepas glyphicon glyphicon-thumbs-down">0 </span> <span class="comment glyphicon glyphicon-comment" id="comment" > </span>
                <span id="dates">'.$donnees['dates'].'</span><br><div class="rep"></div></div></div><br/>';
        }
   // }    
        $reponse->closeCursor();
    ?>
    <style>
        body{
            background-image:url('../images/faq.jpg');
            background-size:100%;
            background-attachment: fixed;
            color:black;
        }
        form{
            color:black;
        }
        #comment{
            text-align:right;
        }
        .categories{
            margin-bottom: 2%;
            background-color:rgba(19,200,170,0.6) ;
            width:30%;
            border-top-right-radius: 5%;
            border-bottom-right-radius:5%;
        }
        @media screen and (max-width:600px){
            .categories{
                margin-bottom: 2%;
                background-color:rgba(19,200,170,0.6) ;
                width:70%;
                border-top-right-radius: 5%;
                border-bottom-right-radius:5%;
            }
        }
    </style>
    <script src='../js/jquery-3.4.1.min.js'></script>
    <script>
       $(document).ready(function(){
           var i=$('.aime').text();
           var ni=parseInt(i);
           var j=$('.aimepas').text();
           var nj=parseInt(j);
           $('.aime').on('click',function(){
               $(this).text(ni+1);
           });
           $('.aimepas').on('click',function(){
               $(this).text(nj+1);
           });
           $('.comment').on('click',function(){
               $('.rep').html('<div id="categorie"><form class="form" method="POST" action="connexion.php"><div class="container-fluid"><div id="ouvc" class="row"><div class="categorie"><input type="text" id="prone" name="pseudo" placeholder="Pseudo"><br><br><textarea id="com" name="messages" placeholder="Répondre"></textarea><button type="submit" name="OK" id="OK">OK</button><br/><br></div></div></div></form></div>');
           });
       });
                    
    </script>
    
    </body>
</html>