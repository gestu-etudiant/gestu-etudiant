<?php
    require_once('../src/jpgraph.php');
    require_once('../src/jpgraph_pie.php');
    require_once('../src/jpgraph_pie3D.php');

    try {
        // Connexion à MySQL 
        $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
        }
        catch(Exception $e) { // Message en cas d'erreur 
            die('Erreur : '.$e->getMessage()); }
        // Si tout va bien, on peut continuer 
        // Récupération contenu
        $reponse = $bdd->query('SELECT COUNT(logement) AS nbrelogement FROM gestu');
        $reponse1 = $bdd->query('SELECT COUNT(logement) AS nbrelogement1 FROM gestu WHERE logement="Site VCN" ' );
        $reponse2 = $bdd->query('SELECT COUNT(logement) AS nbrelogement2 FROM gestu WHERE logement="Hotel du rail" ' );
        $reponse3 = $bdd->query('SELECT COUNT(logement) AS nbrelogement3 FROM gestu WHERE logement="Campus social des amicales" ' );
        $reponse4 = $bdd->query('SELECT COUNT(logement) AS nbrelogement4 FROM gestu WHERE logement="Location" ' );
        $reponse5 = $bdd->query('SELECT COUNT(logement) AS nbrelogement5 FROM gestu WHERE logement="Chez parent ou tuteur" ' );
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
        // Termine le traitement de la requête 
        $reponse->closeCursor();

    $a1=$a1*100/$a;
    $a2=$a2*100/$a;
    $a3=$a3*100/$a;
    $a4=$a4*100/$a;
    $a5=$a5*100/$a;

    $data=array($a1,$a2,$a3,$a4,$a5);

    $graph=new PieGraph(600,450);

    $theme_class=new VividTheme;
    $graph->SetTheme($theme_class);

    $graph->title->Set("Proportion des étudiants au niveau des logements");

    $p1=new PiePlot3D($data);
    $graph->Add($p1);


    $p1->SetTheme('water');
    $p1->ShowBorder();
    $p1->SetCenter(0.5,0.5);
    $p1->SetColor('red');
    $p1->ExplodeSlice(1);
    
    $graph->Stroke();



?>