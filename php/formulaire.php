<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body>
        <!--Partie 1-->
        <div id="P1">
          <?php
            include('menu_nav.php');
          ?>
        <div id='titre_form'>
            <h3>Aidez-nous afin que l'on puisse vous aider!!!</h3>
            <span style='color:red' id='span'>Bon à savoir!!!</span>
            <p id='p'>Gëstu est une plateforme d'enquête et d'analyse en ligne dédié à l'UFR SES. Il permet d' 
                <button class='btn btn-info' id='fermer'>Voir plus</button>
            </p>
        </div>
        <!--Formulaire visiteur-->

            <form class="form" method='POST' action="formulaire.php">
            <div class='container-fluid'>
            <div id="visiteur" class='row'>
                <div class='col-sm-6 col-xs-12'>
                    <label for="ndoss" class='form-label'>Numéro Dossier</label>
                    <input class="form-control" type="number" id="ndoss" name="ndoss" min=0 placeholder="Numéro Dossier"><br/>
                </div>    
                <div class='col-sm-6 col-xs-12'>              
                    <label for='region'>Region de provenance</label>
                    <select id="region" class="form-control" name="region">
                    <option id='S1' class='select'>--Sélectionner--</option><option>Thies</option><option>Dakar</option><option>Diourbel</option><option>Fatick</option>
                    <option>Kaolack</option><option>Kedougou</option><option>Kaffrine</option><option>Louga</option>
                    <option>Matam</option><option>Kolda</option><option>Sedhiou</option><option>Saint-Louis</option>
                    <option>Tambacounda</option><option>Ziguinchor</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>              
                    <label for='filiere'>Filière</label>
                    <select id="filiere" class="form-control" name="filiere">
                    <option id='S2' class='select'>--Sélectionner--</option><option>Management du Tourisme et Hotelerie(MTH)</option><option>Management Informatisé des Organisations(MIO)</option>
                    <option>Management des Activités Touristiques et Culturelles (MATC)</option><option>Sciences Economiques et Gestion(SEG)</option>
                    <option>Langues Etrangères Appliquées (LEA)</option><option>Banque Finance Assurance (BFA)</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>  
                    <label for='jobPa'>Actuellement mon père</label>
                    <select id="jobPa" class="form-control" name='jobPa'>
                    <option id='S3' class='select'>--Sélectionner--</option><option>est dans le secteur primaire</option><option>est dans le secteur secondaire</option>
                    <option>est dans le secteur tertiaire</option><option>est dans le secteur quaternaire</option>
                    <option>travaille pas(chômage,retraité ou mort)</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>  
                    <label for='jobMa'>Actuellement ma mère</label>
                    <select id="jobMa" class="form-control" name='jobMa'>
                    <option id='S4' class='select'>--Sélectionner--</option><option>est dans le secteur primaire</option><option>est dans le secteur secondaire</option>
                    <option>est dans le secteur tertiaire</option><option>est dans le secteur quaternaire</option>
                    <option>travaille pas(chômage,retraitée ou morte)</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>
                    <label for='logement'>Logement</label>
                    <select id="logement" class="form-control" name='logement'>
                    <option id='S5' class='select'>--Sélectionner--</option><option>Site VCN</option><option>Hotel du rail</option>
                    <option>Campus social des amicales</option><option>Location</option>
                    <option>Chez parent ou tuteur</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>
                    <label for='sl'>Êtes-vous satisfait de votre logement?</label>
                    <select id="sl" class="form-control" name='satloge'>
                    <option id='S6' class='select'>--Sélectionner--</option><option>Tres Satisfait</option><option>Satisfait</option>
                    <option>Normal</option><option>Insatisfait</option>
                    <option>Pas du tout satisfait</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>
                    <label for='se'>Comment trouvez-vous la qualité de l'enseignement?</label>
                    <select id="se" class="form-control" name='satens'>
                    <option id='S7' class='select'>--Sélectionner--</option><option>Tres Bonne</option><option>Bonne</option>
                    <option>Normale</option><option>Mauvaise</option>
                    <option>Tres Mauvaise</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'> 
                    <label for='ma'>Moyenne annuelle</label>
                    <select id="ma" class="form-control" name='moyenne'>
                    <option id='S8' class='select'>--Sélectionner--</option><option>Moins de 7,00</option><option>Entre 7,00 et 9,99</option>
                    <option>Entre 10,00 et 11,99</option><option>Entre 12,00 et 13,99</option>
                    <option>Entre 14,00 et 15,99</option><option>Supérieur à 16,00</option>
                    </select><br/>
                </div>
                <div class='col-sm-6 col-xs-12'>   
                    <label for="revenu" class='form-label'>Dépenses mensuelles (en francs cfa)</label>
                    <input type="number" name="revenu"  id="revenu" class="form-control" min=0><br/>
                </div>
                <div class="col-sm-6 col-xs-12" >
                    <label for='SM'>Situation matrimoniale?</label>
                    <div class="form-radio">
                        <label class="form-radio-label" for="Marie">Marié(e)</label>                  
                        <input type="radio" class="form-radio-input" name="SM" value="Marié" id="Marie"><br>
                        
                        <label class="form-radio-label" for="celib">Célibataire</label>
                        <input type="radio" class="form-radio-input" name="SM" value="Célibataire" id='celib'><br>
                        
                        <label class="form-radio-label" for="veuf">Veuf(ve)</label>
                        <input type="radio" class="form-radio-input" name="SM" value="Veuf" id='veuf'><br>
                        
                        <label class="form-radio-label" for="div">Divorcé(e)</label>
                        <input type="radio" class="form-radio-input" name="SM" value="Divorcé" id='div'><br/>
                    </div>    
                </div>
                <div class='col-sm-6 col-xs-12'>    
                    <label for='PR'>Provenance revenus?</label>
                    <div class="form-check">
                        <label class="form-radio-label" for="brs">Bourses</label>                  
                        <input type="checkbox" class="form-radio-input" name="PR" value="Bourses" id="brs"><br>
                        
                        <label class="form-radio-label" for="par">Parent</label>
                        <input type="checkbox" class="form-radio-input" name="PR" value="Parents" id='par'><br>
                        
                        <label class="form-radio-label" for="otr">Autres</label>
                        <input type="checkbox" class="form-radio-input" name="PR" value="Autres" id='otr'>
                    </div><br/>
                </div>
                <span id='remplir'></span>   
                <div><button type="submit" class="btn btn-success form-input" name='submit' id='valider'>Envoyer</button></div>
            </div>
            </div>
            </form>
        </div>
<?php
            require('connexionBD.php');

            if(isset($_POST['submit'])){
                if(isset($_POST['ndoss'],$_POST['SM'],$_POST['region'],$_POST['jobPa'],$_POST['jobMa'],$_POST['logement'],$_POST['moyenne'],$_POST['PR'],$_POST['revenu'],$_POST['filiere'],$_POST['satloge'],$_POST['satens'])){
                    if($_POST['ndoss']!=''&& $_POST['SM']!=''&& $_POST['region']!=''&& $_POST['jobPa']!=''&& $_POST['jobMa']!=''&& $_POST['logement']!=''&& $_POST['moyenne']!=''&& $_POST['PR']!='' && $_POST['revenu']!='' && $_POST['filiere']!='' && $_POST['satloge']!='' && $_POST['satens']!=''){
                        
                        $ndoss=$_POST['ndoss'];
                        $SM=$_POST['SM'];
                        $region=$_POST['region'];
                        $jobPa=$_POST['jobPa'];
                        $jobMa=$_POST['jobMa'];
                        $logement=$_POST['logement'];
                        $moyenne=$_POST['moyenne'];
                        $PR=$_POST['PR'];
                        $revenu=$_POST['revenu'];
                        $filiere=$_POST['filiere'];
                        $satloge=$_POST['satloge'];
                        $satens=$_POST['satens'];

                        $insertion = "INSERT INTO gestu (SM,region,jobPa,jobMa,logement,moyenne,provenance,revenu,ndoss,filiere,satloge,satens) VALUES ('$SM','$region','$jobPa','$jobMa','$logement','$moyenne','$PR','$revenu','$ndoss','$filiere','$satloge','$satens')";

                        $execute=$bd->query($insertion);

                        if($execute==true){
                            $msgSuccess='Infos enrégistrés';
                            //echo('<h2>Merci de votre aide. Nous vous seront éternellement reconnaissant M./Mme</h2>');
                        }else{
                        $msgError="L'enrégistrement n'est pas effectué";
                }
            }
        }
    }
?>
        <style>
            body{
                background-image:url('../images/imagess.jpg');
                background-size:100%;
                background-attachment:fixed;
            }
            label,h3,p{
                color:#50FF50;
            }
            @media screen and (max-width:800px){
                .select{
                    display:none;
                }
            }
        </style>
        <script>
            //Infos
            var fermer = document.getElementById('fermer');
            fermer.addEventListener('click', plus)
            para = document.getElementById('p');
            span = document.getElementById('span');

            function plus() {
                fermer.style.display = 'none';
                para.innerHTML += "évaluer la réussite des étudiants en fonction des facteurs à la fois internes et externes. Grâce à des graphes bien définis, nous tenterons d'apporter quelques solutions face au problème.<br/><button class='btn btn-warning' id='fer' onclick='fer();'>Fermer</button>"

            }

            function fer() {
                para.style.display = 'none';
                span.style.display = 'none';
            }
            //Validation Formulaire
            var doc = document.getElementById('valider');
            doc.addEventListener('click', f_valid);
            var ndoss = document.getElementById('ndoss');
            var region = document.getElementById('region');
            region.addEventListener('click', f_region);
            var filiere = document.getElementById('filiere');
            filiere.addEventListener('click', f_filiere);
            var jobPa = document.getElementById('jobPa');
            jobPa.addEventListener('click', f_Pa);
            var jobMa = document.getElementById('jobMa');
            jobMa.addEventListener('click', f_Ma);
            var logement = document.getElementById('logement');
            logement.addEventListener('click', f_logement);
            var sl = document.getElementById('sl');
            sl.addEventListener('click', f_sl);
            var se = document.getElementById('se');
            se.addEventListener('click', f_se);
            var ma = document.getElementById('ma');
            ma.addEventListener('click', f_ma);
            var revenu = document.getElementById('revenu');
            var Marie = document.getElementById('Marie');
            var celib = document.getElementById('celib');
            var veuf = document.getElementById('veuf');
            var div = document.getElementById('div');

            function f_valid(e) {
                if (ndoss.value == '' || region.value == '--Séléctionner--' || filiere.value == '--Sélectionner--' ||
                    jobPa.value == '--Sélectionner--' || jobMa.value == '--Sélectionner--' ||
                    logement.value == '--Sélectionner--' || sl.value == '--Sélectionner--' ||
                    se.value == '--Sélectionner--' || ma.value == '--Sélectionner--' || revenu.value == '') {
                    e.preventDefault();
                    document.getElementById('remplir').innerHTML = 'Remplir tous les champs<br/>';
                    document.getElementById('remplir').style.color = 'red';
                } else if (ndoss.value < 1000000000 || ndoss.value > 2000000000000) {
                    e.preventDefault();
                    document.getElementById('remplir').innerHTML = 'Entrez un numéro de dossier valide<br/>';
                    document.getElementById('remplir').style.color = 'red';
                } else if (revenu.value < 5000 || revenu.value >300000){
                    e.preventDefault();
                    document.getElementById('remplir').innerHTML = 'Entrez un revenu compris entre 5000frcs et 300000frcs<br/>';
                    document.getElementById('remplir').style.color = 'red';
                }
                else{
                    alert('Bien enrégistré!!!\nMerci de votre aide.\nNous vous serons éternellement reconnaissant');
                }
            }
            //Supprimer l'option Sélectionner
            function f_region() {
                document.getElementById('S1').style.display = 'none';
            }

            function f_filiere() {
                document.getElementById('S2').style.display = 'none';
            }

            function f_Pa() {
                document.getElementById('S3').style.display = 'none';
            }

            function f_Ma() {
                document.getElementById('S4').style.display = 'none';
            }

            function f_logement() {
                document.getElementById('S5').style.display = 'none';
            }

            function f_sl() {
                document.getElementById('S6').style.display = 'none';
            }

            function f_se() {
                document.getElementById('S7').style.display = 'none';
            }

            function f_ma() {
                document.getElementById('S8').style.display = 'none';
            }

        </script>
    </body>
</html>