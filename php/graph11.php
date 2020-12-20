<?php // content="text/plain; charset=utf-8"
require_once ('../src/jpgraph.php');
require_once ('../src/jpgraph_pie.php');

try {
    // Connexion à MySQL 
    $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
    }
    catch(Exception $e) { // Message en cas d'erreur 
        die('Erreur : '.$e->getMessage()); }
    // Si tout va bien, on peut continuer 
    // Récupération contenu
    $reponse = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa FROM gestu ');
   
   //jobPa 
    $reponse1 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa1 FROM gestu WHERE jobPa LIKE "%primaire%"' );
    $reponse2 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa2 FROM gestu WHERE jobPa LIKE "%secondaire%"' );
    $reponse3 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa3 FROM gestu WHERE jobPa LIKE "%tertiaire%"' );
    $reponse4 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa4 FROM gestu WHERE jobPa LIKE "%quaternaire%"' );
    $reponse5 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa5 FROM gestu WHERE jobPa LIKE "travaille pas%"' );

    // On affiche chaque entrée une à une 
    while ( $donnees = $reponse->fetch() ) { 
        $a=$donnees['nbrejobPa'];
     }
     while ( $donnees1 = $reponse1->fetch() ) { 
        $a1=$donnees1['nbrejobPa1'];
     }
     while ( $donnees2 = $reponse2->fetch() ) { 
        $a2=$donnees2['nbrejobPa2'];
     }
     while ( $donnees3 = $reponse3->fetch() ) { 
        $a3=$donnees3['nbrejobPa3'];
     }
     while ( $donnees4 = $reponse4->fetch() ) { 
        $a4=$donnees4['nbrejobPa4'];
     }
     while ( $donnees5 = $reponse5->fetch() ) { 
        $a5=$donnees5['nbrejobPa5'];
     }

$a1=$a1*100/$a;
$a2=$a2*100/$a;
$a3=$a3*100/$a;
$a4=$a4*100/$a;
$a5=$a5*100/$a;

// Some data
$data = array($a1,$a2,$a3,$a4,$a5);

// Create the Pie Graph. 
$graph = new PieGraph(700,350);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("A Simple Pie Plot");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array('yellow','blue','greenyellow','red','bisque'));
$graph->Stroke();

?>