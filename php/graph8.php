<?php // content="text/plain; charset=utf-8"
require_once ('../src/jpgraph.php');
require_once ('../src/jpgraph_bar.php');
require_once ('../src/jpgraph_line.php');


try {
    // Connexion à MySQL 
    $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
    }
    catch(Exception $e) { // Message en cas d'erreur 
        die('Erreur : '.$e->getMessage()); }
    // Si tout va bien, on peut continuer 
    // Récupération contenu
    $reponse = $bdd->query('SELECT COUNT(logement) AS nbrelogement FROM gestu');
    //Logement en général
    $reponse1 = $bdd->query('SELECT COUNT(logement) AS nbrelogement1 FROM gestu WHERE logement="Site VCN" ' );
    $reponse2 = $bdd->query('SELECT COUNT(logement) AS nbrelogement2 FROM gestu WHERE logement="Hotel du rail" ' );
    $reponse3 = $bdd->query('SELECT COUNT(logement) AS nbrelogement3 FROM gestu WHERE logement="Campus social des amicales" ' );
    $reponse4 = $bdd->query('SELECT COUNT(logement) AS nbrelogement4 FROM gestu WHERE logement="Location" ' );
    $reponse5 = $bdd->query('SELECT COUNT(logement) AS nbrelogement5 FROM gestu WHERE logement="Chez parent ou tuteur" ' );
    //Satisfaction par logement
    //VCN
    $vcn1= $bdd->query('SELECT COUNT(*) AS vcn1 FROM gestu WHERE (logement="Site VCN" AND satloge ="Tres Satisfait") ' );
    $vcn2= $bdd->query('SELECT COUNT(*) AS vcn2 FROM gestu WHERE (logement="Site VCN" AND satloge ="Satisfait") ' );
    $vcn3= $bdd->query('SELECT COUNT(*) AS vcn3 FROM gestu WHERE (logement="Site VCN" AND satloge ="Normal") ' );
    $vcn4= $bdd->query('SELECT COUNT(*) AS vcn4 FROM gestu WHERE (logement="Site VCN" AND satloge ="Insatisfait") ' );
    $vcn5= $bdd->query('SELECT COUNT(*) AS vcn5 FROM gestu WHERE (logement="Site VCN" AND satloge ="Pas du tout satisfait") ' );
    //Hotel du rail
    $hot1= $bdd->query('SELECT COUNT(*) AS hot1 FROM gestu WHERE (logement="Hotel du rail" AND satloge ="Tres Satisfait") ' );
    $hot2= $bdd->query('SELECT COUNT(*) AS hot2 FROM gestu WHERE (logement="Hotel du rail" AND satloge ="Satisfait") ' );
    $hot3= $bdd->query('SELECT COUNT(*) AS hot3 FROM gestu WHERE (logement="Hotel du rail" AND satloge ="Normal") ' );
    $hot4= $bdd->query('SELECT COUNT(*) AS hot4 FROM gestu WHERE (logement="Hotel du rail" AND satloge ="Insatisfait") ' );
    $hot5= $bdd->query('SELECT COUNT(*) AS hot5 FROM gestu WHERE (logement="Hotel du rail" AND satloge ="Pas du tout satisfait") ' );
    //Campus Amicale
    $camp1= $bdd->query('SELECT COUNT(*) AS camp1 FROM gestu WHERE (logement="Campus social des amicales" AND satloge ="Tres Satisfait") ' );
    $camp2= $bdd->query('SELECT COUNT(*) AS camp2 FROM gestu WHERE (logement="Campus social des amicales" AND satloge ="Satisfait") ' );
    $camp3= $bdd->query('SELECT COUNT(*) AS camp3 FROM gestu WHERE (logement="Campus social des amicales" AND satloge ="Normal") ' );
    $camp4= $bdd->query('SELECT COUNT(*) AS camp4 FROM gestu WHERE (logement="Campus social des amicales" AND satloge ="Insatisfait") ' );
    $camp5= $bdd->query('SELECT COUNT(*) AS camp5 FROM gestu WHERE (logement="Campus social des amicales" AND satloge ="Pas du tout satisfait") ' );
    //Parent ou Tuteur
    $par1= $bdd->query('SELECT COUNT(*) AS par1 FROM gestu WHERE (logement="Chez parent ou tuteur" AND satloge ="Tres Satisfait") ' );
    $par2= $bdd->query('SELECT COUNT(*) AS par2 FROM gestu WHERE (logement="Chez parent ou tuteur" AND satloge ="Satisfait") ' );
    $par3= $bdd->query('SELECT COUNT(*) AS par3 FROM gestu WHERE (logement="Chez parent ou tuteur" AND satloge ="Normal") ' );
    $par4= $bdd->query('SELECT COUNT(*) AS par4 FROM gestu WHERE (logement="Chez parent ou tuteur" AND satloge ="Insatisfait") ' );
    $par5= $bdd->query('SELECT COUNT(*) AS par5 FROM gestu WHERE (logement="Chez parent ou tuteur" AND satloge ="Pas du tout satisfait") ' );
    //Location
    $loc1= $bdd->query('SELECT COUNT(*) AS loc1 FROM gestu WHERE (logement="Location" AND satloge ="Tres Satisfait") ' );
    $loc2= $bdd->query('SELECT COUNT(*) AS loc2 FROM gestu WHERE (logement="Location" AND satloge ="Satisfait") ' );
    $loc3= $bdd->query('SELECT COUNT(*) AS loc3 FROM gestu WHERE (logement="Location" AND satloge ="Normal") ' );
    $loc4= $bdd->query('SELECT COUNT(*) AS loc4 FROM gestu WHERE (logement="Location" AND satloge ="Insatisfait") ' );
    $loc5= $bdd->query('SELECT COUNT(*) AS loc5 FROM gestu WHERE (logement="Location" AND satloge ="Pas du tout satisfait") ' );
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
     while ( $donnees6 = $vcn1->fetch() ) { 
        $v1=$donnees6['vcn1'];
     }
     while ( $donnees7 = $vcn2->fetch() ) { 
        $v2=$donnees7['vcn2'];
     }
     while ( $donnees8 = $vcn3->fetch() ) { 
        $v3=$donnees8['vcn3'];
     }
     while ( $donnees9 = $vcn4->fetch() ) { 
        $v4=$donnees9['vcn4'];
     }
     while ( $donnees10 = $vcn5->fetch() ) { 
        $v5=$donnees10['vcn5'];
     }
     while ( $donnees11 = $hot1->fetch() ) { 
        $h1=$donnees11['hot1'];
     }
     while ( $donnees12 = $hot2->fetch() ) { 
        $h2=$donnees12['hot2'];
     }
     while ( $donnees13 = $hot3->fetch() ) { 
        $h3=$donnees13['hot3'];
     }
     while ( $donnees14 = $hot4->fetch() ) { 
        $h4=$donnees14['hot4'];
     }
     while ( $donnees15 = $hot5->fetch() ) { 
        $h5=$donnees15['hot5'];
     }
     while ( $donnees16 = $camp1->fetch() ) { 
        $c1=$donnees16['camp1'];
     }
     while ( $donnees17 = $camp2->fetch() ) { 
        $c2=$donnees17['camp2'];
     }
     while ( $donnees18 = $camp3->fetch() ) { 
        $c3=$donnees18['camp3'];
     }
     while ( $donnees19 = $camp4->fetch() ) { 
        $c4=$donnees19['camp4'];
     }
     while ( $donnees20 = $camp5->fetch() ) { 
        $c5=$donnees20['camp5'];
     }
     while ( $donnees21 = $par1->fetch() ) { 
        $p1=$donnees21['par1'];
     }
     while ( $donnees22 = $par2->fetch() ) { 
        $p2=$donnees22['par2'];
     }
     while ( $donnees23 = $par3->fetch() ) { 
        $p3=$donnees23['par3'];
     }
     while ( $donnees24 = $par4->fetch() ) { 
        $p4=$donnees24['par4'];
     }
     while ( $donnees25 = $par5->fetch() ) { 
        $p5=$donnees25['par5'];
     }
     while ( $donnees26 = $loc1->fetch() ) { 
        $l1=$donnees26['loc1'];
     }
     while ( $donnees27 = $loc2->fetch() ) { 
        $l2=$donnees27['loc2'];
     }
     while ( $donnees28 = $loc3->fetch() ) { 
        $l3=$donnees28['loc3'];
     }
     while ( $donnees29 = $loc4->fetch() ) { 
        $l4=$donnees29['loc4'];
     }
     while ( $donnees30 = $loc5->fetch() ) { 
        $l5=$donnees30['loc5'];
     }
    // Termine le traitement de la requête 
    $reponse->closeCursor();

$v1=$v1*100/$a1;
$v2=$v2*100/$a1;
$v3=$v3*100/$a1;
$v4=$v4*100/$a1;
$v5=$v5*100/$a1;

$h1=$h1*100/$a2;
$h2=$h2*100/$a2;
$h3=$h3*100/$a2;
$h4=$h4*100/$a2;
$h5=$h5*100/$a2;

$c1=$c1*100/$a3;
$c2=$c2*100/$a3;
$c3=$c3*100/$a3;
$c4=$c4*100/$a3;
$c5=$c5*100/$a3;

$p1=$p1*100/$a5;
$p2=$p2*100/$a5;
$p3=$p3*100/$a5;
$p4=$p4*100/$a5;
$p5=$p5*100/$a5;

$l1=$l1*100/$a4;
$l2=$l2*100/$a4;
$l3=$l3*100/$a4;
$l4=$l4*100/$a4;
$l5=$l5*100/$a4;
//bar1
$data1y=array($v1,$v2,$v3,$v4,$v5);
//bar2
$data2y=array($h1,$h2,$h3,$h4,$h5);
//bar3
$data3y=array($c1,$c2,$c3,$c4,$c5);
//bar4
$data4y=array($p1,$p2,$p3,$p4,$p5);
//bar5
$data5y=array($l1,$l2,$l3,$l4,$l5);
//line1
$data6y=array(50,58,60,58,53);
foreach ($data6y as &$y) { $y -=10; }

// Create the graph. These two calls are always required
$graph = new Graph(500,400,'auto');
$graph->SetScale("textlin");
$graph->SetY2Scale("lin",0,90);
$graph->SetY2OrderBack(false);

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->SetMargin(40,20,46,80);

$graph->yaxis->SetTickPositions(array(0,10,20,30,40,50,60,70,80,90,100), array(5,15,25,35,45,55,65,75,85,95));
$graph->y2axis->SetTickPositions(array(30,40,50,60,70,80,90));

/*$months = $gDateLocale->GetShortMonth();
$months = array_merge(array_slice($months,3,9), array_slice($months,0,3));*/
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Très Satisfait','Satisfait','Normal','Insatisfait','Pas du tout satisfait'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
// Setup month as labels on the X-axis
//$graph->xaxis->SetTickLabels($months);

// Create the bar plots
$b1plot = new BarPlot($data1y);
$b2plot = new BarPlot($data2y);

$b3plot = new BarPlot($data3y);
$b4plot = new BarPlot($data4y);
$b5plot = new BarPlot($data5y);

$lplot = new LinePlot($data6y);

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot,$b5plot));

// ...and add it to the graPH
$graph->Add($gbplot);
//$graph->AddY2($lplot);

$b1plot->SetColor("#0000CD");
$b1plot->SetFillColor("yellow");
$b1plot->SetLegend("Site VCN");

$b2plot->SetColor("#B0C4DE");
$b2plot->SetFillColor("blue");
$b2plot->SetLegend("Hotel du rail");

$b3plot->SetColor("#8B008B");
$b3plot->SetFillColor("greenyellow");
$b3plot->SetLegend("Amicales");

$b4plot->SetColor("#DA70D6");
$b4plot->SetFillColor("bisque");
$b4plot->SetLegend("Parent/Tuteur");

$b5plot->SetColor("#9370DB");
$b5plot->SetFillColor("red");
$b5plot->SetLegend("Location");

/*$lplot->SetBarCenter();
$lplot->SetColor("yellow");
$lplot->SetLegend("Houses");
$lplot->mark->SetType(MARK_X,'',1.0);
$lplot->mark->SetWeight(2);
$lplot->mark->SetWidth(8);
$lplot->mark->setColor("yellow");
$lplot->mark->setFillColor("yellow");*/

$graph->legend->SetFrameWeight(1);
$graph->legend->SetColumns(6);
$graph->legend->SetColor('#4E4E4E','#00A78A');

$band = new PlotBand(VERTICAL,BAND_RDIAG,11,"max",'khaki4');
$band->ShowFrame(true);
$band->SetOrder(DEPTH_BACK);
$graph->Add($band);

$graph->title->Set("Logement et Satisfaction");

// Display the graph
$graph->Stroke();
?>