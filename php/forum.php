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
            
            <div id='conne'>
                <form class="form" method='POST' action="connexion.php">
                    <div class='container-fluid' id="centrer1">
                        <div id="ouvc" class='row' id="centrer">
                            <div class='col-sm-12'>
                                <label for="adresse" class='form-label'>Adresse e-mail</label>
                                <span class='glyphicon glyphicon-envelope'></span>
                                <input class="form-control" type="text" id="adresse" name="adresse" placeholder="Adresse email"><br/>
                            </div>    
                            <div class='col-sm-12'>              
                                <label for="passeword" class='form-label'>Mot de Passe</label>
                                <span class='glyphicon glyphicon-lock'></span>		
                                <input class="form-control" type="password" id="passeword" name="pswrde" placeholder="Mot de passe"><br/>
                            </div>
                            <span id='remplir1'></span>   
                            <div id='but1'><button type="submit" class="btn btn-success form-input" name='connexion' id='valider1'>Connexion</button></div><br/>
                        </div>
                    <a href='#' id='news'>Mot de passe oublié?</a><br/>  
                    <a href='#' id='new'>Vous n'avez pas encore de compte? Créez-en un.</a><br/>
                    </div>
                </form>
            </div>    
            <div id='nouveaucompte'>
                <p id='sp'>Dans ce cas mieux vaut créer un nouveau compte</p>
                <form class="form" method='POST' action="connexion.php">
                    <div class='container-fluid' id="centrer2">
                        <div id="ouvc" class='row' id="centrer_">
                            <div class='col-sm-12'>
                                <label for="pseudo" class='form-label'>Pseudo</label>
                                <span class='glyphicon glyphicon-user'></span>
                                <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Pseudonyme"><br/>
                            </div>
                            <div class='col-sm-12'>
                                <label for="adr" class='form-label'>Adresse e-mail</label>
                                <span class='glyphicon glyphicon-envelope'></span>
                                <input class="form-control" type="email" id="adr" name="adr" placeholder="blabla@exemple.com"><br/>
                            </div>
                            <div class='col-sm-12'>
                                <label for="tel" class='form-label'>Téléphone</label>
                                <span class='glyphicon glyphicon-earphone'></span>
                                <input class="form-control" type="number" id="tel" name="tel" placeholder="Téléphone"><br/>
                            </div>    
                            <div class='col-sm-12'>              
                                <label for="pswrd" class='form-label'>Mot de Passe</label>
                                <span class='glyphicon glyphicon-lock'></span>		
                                <input class="form-control" type="password" id="pswrd" name="pswrd" placeholder="Mot de passe"><br/>
                            </div>
                            <div class='col-sm-12'>              
                                <label for="pswrd1" class='form-label'>Confirmer mot de passe</label>
                                <span class='glyphicon glyphicon-lock'></span>		
                                <input class="form-control" type="password" id="pswrd1" name="pswrd1" placeholder="Mot de passe"><br/>
                            </div>
                            <span id='rempil'></span>   
                            <div id='but2'><button type="submit" class="btn btn-success form-input" name='submit' id='creerforum'>Créer</button></div><br/>
                            <a href='#' id='newss'>Vous avez déjà un compte? S'identifier.</a><br/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
            /*require('connexionBD.php');

            try {
                // Connexion à MySQL 
                $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
                }
                catch(Exception $e) { // Message en cas d'erreur 
                    die('Erreur : '.$e->getMessage()); }*/
            

        ?>
        <style>
            label{
                color:white;
            }
        </style>
        <script>          
            //Forum
            var sp=document.getElementById('sp');
            sp.style.display='none';
            var conne=document.getElementById('conne');
            document.getElementById('nouveaucompte').style.display = 'none';
            var newcompte=document.getElementById('new');
            var newscompte=document.getElementById('news');
            var newsscompte=document.getElementById('newss');
            newcompte.addEventListener('click',f_insc);
            newscompte.addEventListener('click',f_insce);
            newsscompte.addEventListener('click',f_insces);
            function f_insc(){
                conne.style.display='none';
                document.getElementById('nouveaucompte').style.display='block';
            }
            function f_insce(){
                conne.style.display='none';
                sp.style.display='block';
                sp.style.color='red';
                document.getElementById('nouveaucompte').style.display='block';
            }
            function f_insces(){
                conne.style.display='block';
                sp.style.display='none';
                //sp.style.color='red';
                document.getElementById('nouveaucompte').style.display='none';
            }
            //Inscription forum
            var cf=document.getElementById('creerforum');
            cf.addEventListener('click',f_creer);
            var pseudo=document.getElementById('pseudo');
            var adr=document.getElementById('adr');
            var tel=document.getElementById('tel');
            var pswrd=document.getElementById('pswrd');
            var pswrd1=document.getElementById('pswrd1');
            function f_creer(x){
                if(pseudo.value==""||adr.value==""||tel.value==""||pswrd.value==""||pswrd1.value==""){
                    x.preventDefault();
                    document.getElementById('rempil').innerHTML='Bien remplir tous les champs.<br/>';
                    document.getElementById('rempil').style.color='red';
                }else if(pswrd.value!=pswrd1.value){
                    x.preventDefault();
                    document.getElementById('rempil').innerHTML='Veuillez saisir le même mot de passe.<br/>';
                    document.getElementById('rempil').style.color='red';
                }else if(pswrd.value.length<8){
                    x.preventDefault();
                    document.getElementById('rempil').innerHTML='Un mot de passe doit contenir au moins 6 caractères.<br/>';
                    document.getElementById('rempil').style.color='red';
                }
            }
        </script>
    </body>
</html>