<?php // content="text/plain; charset=utf-8"
require_once ('../src/jpgraph.php');
require_once ('../src/jpgraph_bar.php');

try {
    // Connexion à MySQL 
    $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
    }
    catch(Exception $e) { // Message en cas d'erreur 
        die('Erreur : '.$e->getMessage()); }
    // Si tout va bien, on peut continuer 
    // Récupération contenu
    $reponse = $bdd->query('SELECT COUNT(satens) AS satens FROM gestu');
    $reponse1 = $bdd->query('SELECT COUNT(satens) AS satens1 FROM gestu WHERE satens="Tres Bonne" ' );
    $reponse2 = $bdd->query('SELECT COUNT(satens) AS satens2 FROM gestu WHERE satens="Bonne" ' );
    $reponse3 = $bdd->query('SELECT COUNT(satens) AS satens3 FROM gestu WHERE satens="Normale" ' );
    $reponse4 = $bdd->query('SELECT COUNT(satens) AS satens4 FROM gestu WHERE satens="Mauvaise" ' );
    $reponse5 = $bdd->query('SELECT COUNT(satens) AS satens5 FROM gestu WHERE satens="Tres Mauvaise" ' );
    // On affiche chaque entrée une à une 
    while ( $donnees = $reponse->fetch() ) { 
        $a=$donnees['satens'];
     }
     while ( $donnees1 = $reponse1->fetch() ) { 
        $a1=$donnees1['satens1'];
     }
     while ( $donnees2 = $reponse2->fetch() ) { 
        $a2=$donnees2['satens2'];
     }
     while ( $donnees3 = $reponse3->fetch() ) { 
        $a3=$donnees3['satens3'];
     }
     while ( $donnees4 = $reponse4->fetch() ) { 
        $a4=$donnees4['satens4'];
     }
     while ( $donnees5 = $reponse5->fetch() ) { 
        $a5=$donnees5['satens5'];
     }
    // Termine le traitement de la requête 
    $reponse->closeCursor();

$a1=$a1*100/$a;
$a2=$a2*100/$a;
$a3=$a3*100/$a;
$a4=$a4*100/$a;
$a5=$a5*100/$a;

$datay=array($a1,$a2,$a3,$a4,$a5);


// Create the graph. These two calls are always required
$graph = new Graph(650,400,'auto');
$graph->SetScale("textlin");

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,10,20,30,40,50,60,70,80,90,100), array(5,15,25,35,45,55,65,75,85,95));
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Tres Bonne','Bonne','Normale','Mauvaise','Tres Mauvaise'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($datay);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillGradient("aqua","#7070EA",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(20);
$graph->title->Set("Qualité Enseignement UFR SES");

// Display the graph
$graph->Stroke();
?>