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
                }else{
                    $msgError="L'enrégistrement n'est pas effectué";
                }
            }
        }
    }
?>
</div>
</body>
</html>