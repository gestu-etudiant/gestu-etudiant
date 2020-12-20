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
    $reponse = $bdd->query('SELECT COUNT(region) AS region FROM gestu WHERE revenu>40000');
    $reponse1 = $bdd->query('SELECT COUNT(region) AS region1 FROM gestu WHERE revenu>40000 AND region="Dakar" ' );
    $reponse2 = $bdd->query('SELECT COUNT(region) AS region2 FROM gestu WHERE revenu>40000 AND region="Thies" ' );
    $reponse3 = $bdd->query('SELECT COUNT(region) AS region3 FROM gestu WHERE revenu>40000 AND region="Diourbel" ' );
    $reponse4 = $bdd->query('SELECT COUNT(region) AS region4 FROM gestu WHERE revenu>40000 AND region="Ziguinchor" ' );
    $reponse5 = $bdd->query('SELECT COUNT(region) AS region5 FROM gestu WHERE revenu>40000 AND region="Kolda" ' );
    $reponse6 = $bdd->query('SELECT COUNT(region) AS region6 FROM gestu WHERE revenu>40000 AND region="Matam" ' );
    $reponse7 = $bdd->query('SELECT COUNT(region) AS region7 FROM gestu WHERE revenu>40000 AND region="Sedhiou" ' );
    $reponse8 = $bdd->query('SELECT COUNT(region) AS region8 FROM gestu WHERE revenu>40000 AND region="Kaolack" ' );
    $reponse9 = $bdd->query('SELECT COUNT(region) AS region9 FROM gestu WHERE revenu>40000 AND region="Louga" ' );
    $reponse10 = $bdd->query('SELECT COUNT(region) AS region10 FROM gestu WHERE revenu>40000 AND region="Saint-Louis" ' );
    $reponse11 = $bdd->query('SELECT COUNT(region) AS region11 FROM gestu WHERE revenu>40000 AND region="Kaffrine" ' );
    $reponse12 = $bdd->query('SELECT COUNT(region) AS region12 FROM gestu WHERE revenu>40000 AND region="Fatick" ' );
    $reponse13 = $bdd->query('SELECT COUNT(region) AS region13 FROM gestu WHERE revenu>40000 AND region="Tambacounda" ' );
    $reponse14 = $bdd->query('SELECT COUNT(region) AS region14 FROM gestu WHERE revenu>40000 AND region="Kedougou" ' );
    // On affiche chaque entrée une à une 
    while ( $donnees = $reponse->fetch() ) { 
        $a=$donnees['region'];
     }
     while ( $donnees1 = $reponse1->fetch() ) { 
        $a1=$donnees1['region1'];
     }
     while ( $donnees2 = $reponse2->fetch() ) { 
        $a2=$donnees2['region2'];
     }
     while ( $donnees3 = $reponse3->fetch() ) { 
        $a3=$donnees3['region3'];
     }
     while ( $donnees4 = $reponse4->fetch() ) { 
        $a4=$donnees4['region4'];
     }
     while ( $donnees5 = $reponse5->fetch() ) { 
        $a5=$donnees5['region5'];
     }
     while ( $donnees6 = $reponse6->fetch() ) { 
        $a6=$donnees6['region6'];
     }
     while ( $donnees7 = $reponse7->fetch() ) { 
        $a7=$donnees7['region7'];
     }
     while ( $donnees8 = $reponse8->fetch() ) { 
        $a8=$donnees8['region8'];
     }
     while ( $donnees9 = $reponse9->fetch() ) { 
        $a9=$donnees9['region9'];
     }
     while ( $donnees10 = $reponse10->fetch() ) { 
        $a10=$donnees10['region10'];
     }
     while ( $donnees11 = $reponse11->fetch() ) { 
        $a11=$donnees11['region11'];
     }
     while ( $donnees12 = $reponse12->fetch() ) { 
        $a12=$donnees12['region12'];
     }
     while ( $donnees13 = $reponse13->fetch() ) { 
        $a13=$donnees13['region13'];
     }
     while ( $donnees14 = $reponse14->fetch() ) { 
        $a14=$donnees14['region14'];
     }
    // Termine le traitement de la requête 
    $reponse->closeCursor();

$a1=$a1*100/$a;
$a2=$a2*100/$a;
$a3=$a3*100/$a;
$a4=$a4*100/$a;
$a5=$a5*100/$a;
$a6=$a6*100/$a;
$a7=$a7*100/$a;
$a8=$a8*100/$a;
$a9=$a9*100/$a;
$a10=$a10*100/$a;
$a11=$a11*100/$a;
$a12=$a12*100/$a;
$a13=$a13*100/$a;
$a14=$a14*100/$a;

$datay=array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14);


// Create the graph. These two calls are always required
$graph = new Graph(600,350,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->Set90AndMargin(50,40,40,40);
$graph->img->SetAngle(90); 

// set major and minor tick positions manually
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Dakar','Thies','Diourbel','Ziguinchor','Kolda','Matam','Sedhiou','Kaolack','Louga','Saint-Louis','Kaffrine','Fatick','Tambacounda','Kedougou'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// For background to be gradient, setfill is needed first.
$graph->SetBackgroundGradient('white','white', GRAD_HOR, BGRAD_PLOT);

// Create the bar plots
$b1plot = new BarPlot($datay);

// ...and add it to the graPH
$graph->Add($b1plot);

$b1plot->SetWeight(0);
$b1plot->SetFillGradient("aqua","#7070EA",GRAD_HOR);
$b1plot->SetWidth(17);
$graph->title->Set("Etudiant par région et revenu>40 000 frcs");
// Display the graph
$graph->Stroke();
?>