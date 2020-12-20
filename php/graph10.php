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
    $reponse = $bdd->query('SELECT COUNT(moyenne) AS nbrelogement FROM gestu WHERE moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"');
   
   //Logement 
    $reponse1 = $bdd->query('SELECT COUNT(logement) AS nbrelogement1 FROM gestu WHERE logement="Site VCN" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
    $reponse2 = $bdd->query('SELECT COUNT(logement) AS nbrelogement2 FROM gestu WHERE logement="Hotel du rail" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
    $reponse3 = $bdd->query('SELECT COUNT(logement) AS nbrelogement3 FROM gestu WHERE logement="Campus social des amicales" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
    $reponse4 = $bdd->query('SELECT COUNT(logement) AS nbrelogement4 FROM gestu WHERE logement="Location" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
    $reponse5 = $bdd->query('SELECT COUNT(logement) AS nbrelogement5 FROM gestu WHERE logement="Chez parent ou tuteur" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );

   //Revenu 
    $reponse6 = $bdd->query('SELECT COUNT(revenu) AS nbrelogement6 FROM gestu WHERE revenu>40000 AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
    $reponse7 = $bdd->query('SELECT COUNT(revenu) AS nbrelogement7 FROM gestu WHERE revenu<=40000 AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
   
   //Satisfaction logement
   $reponse8 = $bdd->query('SELECT COUNT(logement) AS nbrelogement8 FROM gestu WHERE satloge="Tres Satisfait" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
   $reponse9 = $bdd->query('SELECT COUNT(logement) AS nbrelogement9 FROM gestu WHERE satloge="Satisfait" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
   $reponse10 = $bdd->query('SELECT COUNT(logement) AS nbrelogement10 FROM gestu WHERE satloge="Normal" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
   $reponse11 = $bdd->query('SELECT COUNT(logement) AS nbrelogement11 FROM gestu WHERE satloge="Insatisfait" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );
   $reponse12 = $bdd->query('SELECT COUNT(logement) AS nbrelogement12 FROM gestu WHERE satloge="Pas du tout satisfait" AND moyenne LIKE "%12%" OR moyenne LIKE "%14%" OR moyenne LIKE "%16%"' );

   //Qualite Enseignement
   $reponses = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa FROM gestu ');
   
   //jobPa 
    $reponse13 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa13 FROM gestu WHERE jobPa LIKE "%primaire%" AND moyenne LIKE "%12%"' );
    $reponse14 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa14 FROM gestu WHERE jobPa LIKE "%secondaire%" AND moyenne LIKE "%12%"' );
    $reponse15 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa15 FROM gestu WHERE jobPa LIKE "%tertiaire%" AND moyenne LIKE "%12%"' );
    $reponse16 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa16 FROM gestu WHERE jobPa LIKE "%quaternaire%" AND moyenne LIKE "%12%"' );
    $reponse17 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa17 FROM gestu WHERE jobPa LIKE "travaille pas%" AND moyenne LIKE "%12%"' );

    // On affiche chaque entrée une à une 
    while ( $donnees = $reponse->fetch() ) { 
        $a=$donnees['nbrelogement'];
     }
     while ( $donnees1 = $reponse1->fetch() ) { 
        $a1=$donnees1['nbrelogement1'];
     }
     while ( $donnees2 = $reponse2->fetch() ) { 
        $a2=$donnees2['nbrelogement2'];
     }
     while ( $donnees3 = $reponse3->fetch() ) { 
        $a3=$donnees3['nbrelogement3'];
     }
     while ( $donnees4 = $reponse4->fetch() ) { 
        $a4=$donnees4['nbrelogement4'];
     }
     while ( $donnees5 = $reponse5->fetch() ) { 
        $a5=$donnees5['nbrelogement5'];
     }

     while ( $donnees6 = $reponse6->fetch() ) { 
        $b1=$donnees6['nbrelogement6'];
     }
     while ( $donnees7 = $reponse7->fetch() ) { 
        $b2=$donnees7['nbrelogement7'];
     }
   while ( $donnees8 = $reponse8->fetch() ) { 
      $c1=$donnees8['nbrelogement8'];
   }
   while ( $donnees9 = $reponse9->fetch() ) { 
      $c2=$donnees9['nbrelogement9'];
   }
   while ( $donnees10 = $reponse10->fetch() ) { 
      $c3=$donnees10['nbrelogement10'];
   }

   while ( $donnees11 = $reponse11->fetch() ) { 
      $c4=$donnees11['nbrelogement11'];
   }
   while ( $donnees12 = $reponse12->fetch() ) { 
      $c5=$donnees12['nbrelogement12'];
   }
   while ( $donnees = $reponses->fetch() ) { 
      $d=$donnees['nbrejobPa'];
   }
   while ( $donnees13 = $reponse13->fetch() ) { 
      $d1=$donnees13['nbrejobPa13'];
   }
   while ( $donnees14 = $reponse14->fetch() ) { 
      $d2=$donnees14['nbrejobPa14'];
   }
   while ( $donnees15 = $reponse15->fetch() ) { 
      $d3=$donnees15['nbrejobPa15'];
   }
   while ( $donnees16 = $reponse16->fetch() ) { 
      $d4=$donnees16['nbrejobPa16'];
   }
   while ( $donnees17 = $reponse17->fetch() ) { 
      $d5=$donnees17['nbrejobPa17'];
   }


    // Termine le traitement de la requête 
    $reponse->closeCursor();

$a1=$a1*100/$a;
$a2=$a2*100/$a;
$a3=$a3*100/$a;
$a4=$a4*100/$a;
$a5=$a5*100/$a;
$b1=$b1*100/$a;
$b2=$b2*100/$a;
$c1=$c1*100/$a;
$c2=$c2*100/$a;
$c3=$c3*100/$a;
$c4=$c4*100/$a;
$c5=$c5*100/$a;
$d1=$d1*100/$a;
$d2=$d2*100/$a;
$d3=$d3*100/$a;
$d4=$d4*100/$a;
$d5=$d5*100/$a;

// Some data
$data1=array($a1,$a2,$a3,$a4,$a5);
$data2=array($b1,$b2);
$data3=array($c1,$c2,$c3,$c4,$c5);
$data4 = array($d1,$d2,$d3,$d4,$d5);

// Create the Pie Graph.
$graph = new PieGraph(900,500);
$graph->SetShadow();

// Set A title for the plot
$graph->title->Set("Les étudiants qui ont au moins la mention assez bien");

// Create plots
$size=0.17;
$p1 = new PiePlot($data1);
$graph->Add($p1);

$p1->SetSize($size);
$p1->SetCenter(0.25,0.32);
$p1->SetSliceColors(array('yellow','blue','greenyellow','red','bisque'));
$p1->title->Set("Logement");

$p2 = new PiePlot($data2);
$graph->Add($p2);

$p2->SetSize($size);
$p2->SetCenter(0.65,0.32);
$p2->SetSliceColors(array('yellow','blue'));
$p2->title->Set("Revenu");

$p3 = new PiePlot($data3);
$graph->Add($p3);

$p3->SetSize($size);
$p3->SetCenter(0.25,0.8);
$p3->SetSliceColors(array('yellow','blue','greenyellow','red','bisque'));
$p3->title->Set("Satisfaction Logement");

$p4 = new PiePlot($data4);
$graph->Add($p4);

$p4->SetSize($size);
$p4->SetCenter(0.65,0.8);
$p4->SetSliceColors(array('yellow','blue','greenyellow','red','bisque'));
$p4->title->Set("Secteur où évolue le papa");


$graph->Stroke();

?>