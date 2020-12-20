<!DOCTYPE html>
<html>
    <head>
        <title>Interprétation des graphiques</title>
        <?php
            include('head.php');
          ?>
    </head>
    <body>

        <div id="P2">
          <!--Menu-->
          <?php
            include('menu_nav.php');
          ?>
          </div>
          <!--Niveau 1-->
          <div id='b1'><a class='glyphicon glyphicon-hand-right' href='#'> Proportion des étudiants au niveau des logements</a></div>
          <div id='a1'>
              <?php
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
                echo '<p>Parmi les étudiants ayant rempli le formulaire nous avons <b>'.number_format($a1,2).'%</b> qui sont logés au site VCN ; <b>'.number_format($a2,2).'%</b> sont à l\'hôtel du rail ;<b>'.number_format($a3,2).'% </b>sont logés au niveau des campus sociaux des amicales ; <b>'.number_format($a4,2).'%</b> qui ont trouvé une location quelque part et <b>'.number_format($a5,2).'% </b>qui vivent avec leur parent ou tuteur</p>';
            ?>
          </div>
          <!--Niveau 2-->
          <div id='b2'><a class='glyphicon glyphicon-hand-right' href='#'> Satisfaction logement</a></div>
          <div id='a2'>
            <?php
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

                echo'<p>Parmi les étudiants logés au site VCN <b>'.number_format($v1,2).'%</b> sont très satisfaits des logements ; <b>'.number_format($v2,2).'%</b> sont satisfaits ; <b>'.number_format($v3,2).'%</b> trouvent leur condition normale ; <b>'.number_format($v4,2).'%</b> sont insatisfaits et <b>'.number_format($v5,2).'%</b> ne sont pas du tout satisfaits.<br/>
                Parmi ceux qui sont à l\'hôtel du rail <b>'.number_format($h1,2).'%</b> sont très satisfaits des logements ; <b>'.number_format($h2,2).'%</b> sont satisfaits ; <b>'.number_format($h3,2).'%</b> trouvent leur condition normale ; <b>'.number_format($h4,2).'%</b> sont insatisfaits et <b>'.number_format($h5,2).'%</b> ne sont pas du tout satisfaits.<br/>
                Pour ceux qui sont au niveau des amicales <b>'.number_format($c1,2).'%</b> sont très satisfaits des logements ; <b>'.number_format($c2,2).'%</b> sont satisfaits ; <b>'.number_format($c3,2).'%</b> trouvent leur condition normale ; <b>'.number_format($c4,2).'%</b> sont insatisfaits et <b>'.number_format($c5,2).'%</b> ne sont pas du tout satisfaits.<br/>
                Pour ceux qui ont trouvé une location <b>'.number_format($l1,2).'%</b> sont très satisfaits des logements ; <b>'.number_format($l2,2).'%</b> sont satisfaits ; <b>'.number_format($l3,2).'%</b> trouvent leur condition normale ; <b>'.number_format($l4,2).'%</b> sont insatisfaits et <b>'.number_format($l5,2).'%</b> ne sont pas du tout satisfaits.<br/>
                Parmi les étudiants qui sont avec leurs parents ou tuteurs: <b>'.number_format($p1,2).'%</b> sont très satisfaits des logements ; <b>'.number_format($p2,2).'%</b> sont satisfaits ; <b>'.number_format($p3,2).'%</b> trouvent leur condition normale ; <b>'.number_format($p4,2).'%</b> sont insatisfaits et <b>'.number_format($p5,2).'%</b> ne sont pas du tout satisfaits.<br/></p>';
            ?>
          </div>
          <!--Niveau 3-->
          <div id='b3'><a class='glyphicon glyphicon-hand-right' href='#'> Régions et Sécteurs où évolue le papa</a></div>
          <div id="a3">
            <?php  
                        try {
                // Connexion à MySQL 
                $bdd = new PDO('mysql:host=localhost;dbname=gestu', 'root', '');
                }
                catch(Exception $e) { // Message en cas d'erreur 
                    die('Erreur : '.$e->getMessage()); }
                // Si tout va bien, on peut continuer 
                // Selection régions
                $dk = $bdd->query('SELECT COUNT(region) AS dakar FROM gestu WHERE region="Dakar"');
                $th = $bdd->query('SELECT COUNT(region) AS thies FROM gestu WHERE region="Thies"');
                $dl = $bdd->query('SELECT COUNT(region) AS diourbel FROM gestu WHERE region="Diourbel"');
                $kl = $bdd->query('SELECT COUNT(region) AS kaolack FROM gestu WHERE region="Kaolack"');
                $kf = $bdd->query('SELECT COUNT(region) AS kaffrine FROM gestu WHERE region="Kaffrine"');
                $kd = $bdd->query('SELECT COUNT(region) AS kedougou FROM gestu WHERE region="Kedougou"');
                $ma = $bdd->query('SELECT COUNT(region) AS matam FROM gestu WHERE region="Matam"');
                $zg = $bdd->query('SELECT COUNT(region) AS zig FROM gestu WHERE region="Ziguinchor"');
                $kol = $bdd->query('SELECT COUNT(region) AS kolda FROM gestu WHERE region="Kolda"');
                $fa = $bdd->query('SELECT COUNT(region) AS tamba FROM gestu WHERE region="Tambacounda"');
                $tc = $bdd->query('SELECT COUNT(region) AS fatick FROM gestu WHERE region="Fatick"');
                $se = $bdd->query('SELECT COUNT(region) AS sedhiou FROM gestu WHERE region="Sedhiou"');
                $lg = $bdd->query('SELECT COUNT(region) AS louga FROM gestu WHERE region="Louga"');
                $sl = $bdd->query('SELECT COUNT(region) AS saintl FROM gestu WHERE region="Saint-Louis"');

                //Secteur primaire
                $dk1 = $bdd->query('SELECT COUNT(region) AS dakar1 FROM gestu WHERE region="Dakar" AND jobPa LIKE "%primaire"');
                $th1 = $bdd->query('SELECT COUNT(region) AS thies1 FROM gestu WHERE region="Thies" AND jobPa LIKE "%primaire"');
                $dl1 = $bdd->query('SELECT COUNT(region) AS diourbel1 FROM gestu WHERE region="Diourbel" AND jobPa LIKE "%primaire"');
                $kl1 = $bdd->query('SELECT COUNT(region) AS kaolack1 FROM gestu WHERE region="Kaolack" AND jobPa LIKE "%primaire"');
                $kf1 = $bdd->query('SELECT COUNT(region) AS kaffrine1 FROM gestu WHERE region="Kaffrine" AND jobPa LIKE "%primaire"');
                $kd1 = $bdd->query('SELECT COUNT(region) AS kedougou1 FROM gestu WHERE region="Kedougou" AND jobPa LIKE "%primaire"');
                $ma1 = $bdd->query('SELECT COUNT(region) AS matam1 FROM gestu WHERE region="Matam" AND jobPa LIKE "%primaire"');
                $zg1 = $bdd->query('SELECT COUNT(region) AS zig1 FROM gestu WHERE region="Ziguinchor" AND jobPa LIKE "%primaire"');
                $kol1 = $bdd->query('SELECT COUNT(region) AS kolda1 FROM gestu WHERE region="Kolda" AND jobPa LIKE "%primaire"');
                $fa1 = $bdd->query('SELECT COUNT(region) AS tamba1 FROM gestu WHERE region="Tambacounda" AND jobPa LIKE "%primaire"');
                $tc1 = $bdd->query('SELECT COUNT(region) AS fatick1 FROM gestu WHERE region="Fatick" AND jobPa LIKE "%primaire"');
                $se1 = $bdd->query('SELECT COUNT(region) AS sedhiou1 FROM gestu WHERE region="Sedhiou" AND jobPa LIKE "%primaire"');
                $lg1 = $bdd->query('SELECT COUNT(region) AS louga1 FROM gestu WHERE region="Louga" AND jobPa LIKE "%primaire"');
                $sl1 = $bdd->query('SELECT COUNT(region) AS saintl1 FROM gestu WHERE region="Saint-Louis" AND jobPa LIKE "%primaire"');

            //Secteur secondaire
                $dk2 = $bdd->query('SELECT COUNT(region) AS dakar2 FROM gestu WHERE region="Dakar" AND jobPa LIKE "%secondaire"');
                $th2 = $bdd->query('SELECT COUNT(region) AS thies2 FROM gestu WHERE region="Thies" AND jobPa LIKE "%secondaire"');
                $dl2 = $bdd->query('SELECT COUNT(region) AS diourbel2 FROM gestu WHERE region="Diourbel" AND jobPa LIKE "%secondaire"');
                $kl2 = $bdd->query('SELECT COUNT(region) AS kaolack2 FROM gestu WHERE region="Kaolack" AND jobPa LIKE "%secondaire"');
                $kf2 = $bdd->query('SELECT COUNT(region) AS kaffrine2 FROM gestu WHERE region="Kaffrine" AND jobPa LIKE "%secondaire"');
                $kd2 = $bdd->query('SELECT COUNT(region) AS kedougou2 FROM gestu WHERE region="Kedougou" AND jobPa LIKE "%secondaire"');
                $ma2 = $bdd->query('SELECT COUNT(region) AS matam2 FROM gestu WHERE region="Matam" AND jobPa LIKE "%secondaire"');
                $zg2 = $bdd->query('SELECT COUNT(region) AS zig2 FROM gestu WHERE region="Ziguinchor" AND jobPa LIKE "%secondaire"');
                $kol2 = $bdd->query('SELECT COUNT(region) AS kolda2 FROM gestu WHERE region="Kolda" AND jobPa LIKE "%secondaire"');
                $fa2 = $bdd->query('SELECT COUNT(region) AS tamba2 FROM gestu WHERE region="Tambacounda" AND jobPa LIKE "%secondaire"');
                $tc2 = $bdd->query('SELECT COUNT(region) AS fatick2 FROM gestu WHERE region="Fatick" AND jobPa LIKE "%secondaire"');
                $se2 = $bdd->query('SELECT COUNT(region) AS sedhiou2 FROM gestu WHERE region="Sedhiou" AND jobPa LIKE "%secondaire"');
                $lg2 = $bdd->query('SELECT COUNT(region) AS louga2 FROM gestu WHERE region="Louga" AND jobPa LIKE "%secondaire"');
                $sl2 = $bdd->query('SELECT COUNT(region) AS saintl2 FROM gestu WHERE region="Saint-Louis" AND jobPa LIKE "%secondaire"');

            //Secteur tertiaire
                $dk3 = $bdd->query('SELECT COUNT(region) AS dakar3 FROM gestu WHERE region="Dakar" AND jobPa LIKE "%tertiaire"');
                $th3 = $bdd->query('SELECT COUNT(region) AS thies3 FROM gestu WHERE region="Thies" AND jobPa LIKE "%tertiaire"');
                $dl3 = $bdd->query('SELECT COUNT(region) AS diourbel3 FROM gestu WHERE region="Diourbel" AND jobPa LIKE "%tertiaire"');
                $kl3 = $bdd->query('SELECT COUNT(region) AS kaolack3 FROM gestu WHERE region="Kaolack" AND jobPa LIKE "%tertiaire"');
                $kf3 = $bdd->query('SELECT COUNT(region) AS kaffrine3 FROM gestu WHERE region="Kaffrine" AND jobPa LIKE "%tertiaire"');
                $kd3 = $bdd->query('SELECT COUNT(region) AS kedougou3 FROM gestu WHERE region="Kedougou" AND jobPa LIKE "%tertiaire"');
                $ma3 = $bdd->query('SELECT COUNT(region) AS matam3 FROM gestu WHERE region="Matam" AND jobPa LIKE "%tertiaire"');
                $zg3 = $bdd->query('SELECT COUNT(region) AS zig3 FROM gestu WHERE region="Ziguinchor" AND jobPa LIKE "%tertiaire"');
                $kol3 = $bdd->query('SELECT COUNT(region) AS kolda3 FROM gestu WHERE region="Kolda" AND jobPa LIKE "%tertiaire"');
                $fa3 = $bdd->query('SELECT COUNT(region) AS tamba3 FROM gestu WHERE region="Tambacounda" AND jobPa LIKE "%tertiaire"');
                $tc3 = $bdd->query('SELECT COUNT(region) AS fatick3 FROM gestu WHERE region="Fatick" AND jobPa LIKE "%tertiaire"');
                $se3 = $bdd->query('SELECT COUNT(region) AS sedhiou3 FROM gestu WHERE region="Sedhiou" AND jobPa LIKE "%tertiaire"');
                $lg3 = $bdd->query('SELECT COUNT(region) AS louga3 FROM gestu WHERE region="Louga" AND jobPa LIKE "%tertiaire"');
                $sl3 = $bdd->query('SELECT COUNT(region) AS saintl3 FROM gestu WHERE region="Saint-Louis" AND jobPa LIKE "%tertiaire"');

            //Secteur quaternaire
                $dk4 = $bdd->query('SELECT COUNT(region) AS dakar4 FROM gestu WHERE region="Dakar" AND jobPa LIKE "%quaternaire"');
                $th4 = $bdd->query('SELECT COUNT(region) AS thies4 FROM gestu WHERE region="Thies" AND jobPa LIKE "%quaternaire"');
                $dl4 = $bdd->query('SELECT COUNT(region) AS diourbel4 FROM gestu WHERE region="Diourbel" AND jobPa LIKE "%quaternaire"');
                $kl4 = $bdd->query('SELECT COUNT(region) AS kaolack4 FROM gestu WHERE region="Kaolack" AND jobPa LIKE "%quaternaire"');
                $kf4 = $bdd->query('SELECT COUNT(region) AS kaffrine4 FROM gestu WHERE region="Kaffrine" AND jobPa LIKE "%quaternaire"');
                $kd4 = $bdd->query('SELECT COUNT(region) AS kedougou4 FROM gestu WHERE region="Kedougou" AND jobPa LIKE "%quaternaire"');
                $ma4 = $bdd->query('SELECT COUNT(region) AS matam4 FROM gestu WHERE region="Matam" AND jobPa LIKE "%quaternaire"');
                $zg4 = $bdd->query('SELECT COUNT(region) AS zig4 FROM gestu WHERE region="Ziguinchor" AND jobPa LIKE "%quaternaire"');
                $kol4 = $bdd->query('SELECT COUNT(region) AS kolda4 FROM gestu WHERE region="Kolda" AND jobPa LIKE "%quaternaire"');
                $fa4 = $bdd->query('SELECT COUNT(region) AS tamba4 FROM gestu WHERE region="Tambacounda" AND jobPa LIKE "%quaternaire"');
                $tc4 = $bdd->query('SELECT COUNT(region) AS fatick4 FROM gestu WHERE region="Fatick" AND jobPa LIKE "%quaternaire"');
                $se4 = $bdd->query('SELECT COUNT(region) AS sedhiou4 FROM gestu WHERE region="Sedhiou" AND jobPa LIKE "%quaternaire"');
                $lg4 = $bdd->query('SELECT COUNT(region) AS louga4 FROM gestu WHERE region="Louga" AND jobPa LIKE "%quaternaire"');
                $sl4 = $bdd->query('SELECT COUNT(region) AS saintl4 FROM gestu WHERE region="Saint-Louis" AND jobPa LIKE "%quaternaire"');

            //Travaille pas
                $dk5 = $bdd->query('SELECT COUNT(region) AS dakar5 FROM gestu WHERE region="Dakar" AND jobPa LIKE "travaille pas%"');
                $th5 = $bdd->query('SELECT COUNT(region) AS thies5 FROM gestu WHERE region="Thies" AND jobPa LIKE "travaille pas%"');
                $dl5 = $bdd->query('SELECT COUNT(region) AS diourbel5 FROM gestu WHERE region="Diourbel" AND jobPa LIKE "travaille pas%"');
                $kl5 = $bdd->query('SELECT COUNT(region) AS kaolack5 FROM gestu WHERE region="Kaolack" AND jobPa LIKE "travaille pas%"');
                $kf5 = $bdd->query('SELECT COUNT(region) AS kaffrine5 FROM gestu WHERE region="Kaffrine" AND jobPa LIKE "travaille pas%"');
                $kd5 = $bdd->query('SELECT COUNT(region) AS kedougou5 FROM gestu WHERE region="Kedougou" AND jobPa LIKE "travaille pas%"');
                $ma5 = $bdd->query('SELECT COUNT(region) AS matam5 FROM gestu WHERE region="Matam" AND jobPa LIKE "travaille pas%"');
                $zg5 = $bdd->query('SELECT COUNT(region) AS zig5 FROM gestu WHERE region="Ziguinchor" AND jobPa LIKE "travaille pas%"');
                $kol5 = $bdd->query('SELECT COUNT(region) AS kolda5 FROM gestu WHERE region="Kolda" AND jobPa LIKE "travaille pas%"');
                $fa5 = $bdd->query('SELECT COUNT(region) AS tamba5 FROM gestu WHERE region="Tambacounda" AND jobPa LIKE "travaille pas%"');
                $tc5 = $bdd->query('SELECT COUNT(region) AS fatick5 FROM gestu WHERE region="Fatick" AND jobPa LIKE "travaille pas%"');
                $se5 = $bdd->query('SELECT COUNT(region) AS sedhiou5 FROM gestu WHERE region="Sedhiou" AND jobPa LIKE "travaille pas%"');
                $lg5 = $bdd->query('SELECT COUNT(region) AS louga5 FROM gestu WHERE region="Louga" AND jobPa LIKE "travaille pas%"');
                $sl5 = $bdd->query('SELECT COUNT(region) AS saintl5 FROM gestu WHERE region="Saint-Louis" AND jobPa LIKE "travaille pas%"');
                // Région 
                while ( $donnees = $dk->fetch() ) { 
                    $r1=$donnees['dakar'];
                }
                while ( $donnees1 = $th->fetch() ) { 
                $r2=$donnees1['thies'];
            }
            while ( $donnees3 = $dl->fetch() ) { 
                $r3=$donnees3['diourbel'];
            }
            while ( $donnees4 = $kl->fetch() ) { 
                $r4=$donnees4['kaolack'];
            }
            while ( $donnees5 = $kf->fetch() ) { 
                $r5=$donnees5['kaffrine'];
            }
            while ( $donnees6 = $kd->fetch() ) { 
                $r6=$donnees6['kedougou'];
            }
            while ( $donnees7 = $ma->fetch() ) { 
                $r7=$donnees7['matam'];
            }
            while ( $donnees8 = $zg->fetch() ) { 
                $r8=$donnees8['zig'];
            }
            while ( $donnees9 = $kol->fetch() ) { 
                $r9=$donnees9['kolda'];
            }
            while ( $donnees10 = $fa->fetch() ) { 
                $r10=$donnees10['tamba'];
            }
            while ( $donnees11 = $tc->fetch() ) { 
                $r11=$donnees11['fatick'];
            }
            while ( $donnees12 = $se->fetch() ) { 
                $r12=$donnees12['sedhiou'];
            }
            while ( $donnees13 = $lg->fetch() ) { 
                $r13=$donnees13['louga'];
            }
            while ( $donnees14 = $sl->fetch() ) { 
                $r14=$donnees14['saintl'];
            }

            // Secteur primaire 
            while ( $prim = $dk1->fetch() ) { 
                $p1=$prim['dakar1'];
            }
            while ( $prim1 = $th1->fetch() ) { 
                $p2=$prim1['thies1'];
            }
            while ( $prim3 = $dl1->fetch() ) { 
                $p3=$prim3['diourbel1'];
            }
            while ( $prim4 = $kl1->fetch() ) { 
                $p4=$prim4['kaolack1'];
            }
            while ( $prim5 = $kf1->fetch() ) { 
                $p5=$prim5['kaffrine1'];
            }
            while ( $prim6 = $kd1->fetch() ) { 
                $p6=$prim6['kedougou1'];
            }
            while ( $prim7 = $ma1->fetch() ) { 
                $p7=$prim7['matam1'];
            }
            while ( $prim8 = $zg1->fetch() ) { 
                $p8=$prim8['zig1'];
            }
            while ( $prim9 = $kol1->fetch() ) { 
                $p9=$prim9['kolda1'];
            }
            while ( $prim10 = $fa1->fetch() ) { 
                $p10=$prim10['tamba1'];
            }
            while ( $prim11 = $tc1->fetch() ) { 
                $p11=$prim11['fatick1'];
            }
            while ( $prim12 = $se1->fetch() ) { 
                $p12=$prim12['sedhiou1'];
            }
            while ( $prim13 = $lg1->fetch() ) { 
                $p13=$prim13['louga1'];
            }
            while ( $prim14 = $sl1->fetch() ) { 
                $p14=$prim14['saintl1'];
            }  

            // Secteur secondaire 
            while ( $sec = $dk2->fetch() ) { 
            $s1=$sec['dakar2'];
            }
            while ( $sec1 = $th2->fetch() ) { 
            $s2=$sec1['thies2'];
            }
            while ( $sec3 = $dl2->fetch() ) { 
            $s3=$sec3['diourbel2'];
            }
            while ( $sec4 = $kl2->fetch() ) { 
            $s4=$sec4['kaolack2'];
            }
            while ( $sec5 = $kf2->fetch() ) { 
            $s5=$sec5['kaffrine2'];
            }
            while ( $sec6 = $kd2->fetch() ) { 
            $s6=$sec6['kedougou2'];
            }
            while ( $sec7 = $ma2->fetch() ) { 
            $s7=$sec7['matam2'];
            }
            while ( $sec8 = $zg2->fetch() ) { 
            $s8=$sec8['zig2'];
            }
            while ( $sec9 = $kol2->fetch() ) { 
            $s9=$sec9['kolda2'];
            }
            while ( $sec10 = $fa2->fetch() ) { 
            $s10=$sec10['tamba2'];
            }
            while ( $sec11 = $tc2->fetch() ) { 
            $s11=$sec11['fatick2'];
            }
            while ( $sec12 = $se2->fetch() ) { 
            $s12=$sec12['sedhiou2'];
            }
            while ( $sec13 = $lg2->fetch() ) { 
            $s13=$sec13['louga2'];
            }
            while ( $sec14 = $sl2->fetch() ) { 
            $s14=$sec14['saintl2'];
            }

            // Secteur tertiaire 
            while ( $tert = $dk3->fetch() ) { 
            $t1=$tert['dakar3'];
            }
            while ( $tert1 = $th3->fetch() ) { 
            $t2=$tert1['thies3'];
            }
            while ( $tert3 = $dl3->fetch() ) { 
            $t3=$tert3['diourbel3'];
            }
            while ( $tert4 = $kl3->fetch() ) { 
            $t4=$tert4['kaolack3'];
            }
            while ( $tert5 = $kf3->fetch() ) { 
            $t5=$tert5['kaffrine3'];
            }
            while ( $tert6 = $kd3->fetch() ) { 
            $t6=$tert6['kedougou3'];
            }
            while ( $tert7 = $ma3->fetch() ) { 
            $t7=$tert7['matam3'];
            }
            while ( $tert8 = $zg3->fetch() ) { 
            $t8=$tert8['zig3'];
            }
            while ( $tert9 = $kol3->fetch() ) { 
            $t9=$tert9['kolda3'];
            }
            while ( $tert10 = $fa3->fetch() ) { 
            $t10=$tert10['tamba3'];
            }
            while ( $tert11 = $tc3->fetch() ) { 
            $t11=$tert11['fatick3'];
            }
            while ( $tert12 = $se3->fetch() ) { 
            $t12=$tert12['sedhiou3'];
            }
            while ( $tert13 = $lg3->fetch() ) { 
            $t13=$tert13['louga3'];
            }
            while ( $tert14 = $sl3->fetch() ) { 
            $t14=$tert14['saintl3'];
            } 

            // Secteur quaternaire 
            while ( $quat = $dk4->fetch() ) { 
            $q1=$quat['dakar4'];
            }
            while ( $quat1 = $th4->fetch() ) { 
            $q2=$quat1['thies4'];
            }
            while ( $quat3 = $dl4->fetch() ) { 
            $q3=$quat3['diourbel4'];
            }
            while ( $quat4 = $kl4->fetch() ) { 
            $q4=$quat4['kaolack4'];
            }
            while ( $quat5 = $kf4->fetch() ) { 
            $q5=$quat5['kaffrine4'];
            }
            while ( $quat6 = $kd4->fetch() ) { 
            $q6=$quat6['kedougou4'];
            }
            while ( $quat7 = $ma4->fetch() ) { 
            $q7=$quat7['matam4'];
            }
            while ( $quat8 = $zg4->fetch() ) { 
            $q8=$quat8['zig4'];
            }
            while ( $quat9 = $kol4->fetch() ) { 
            $q9=$quat9['kolda4'];
            }
            while ( $quat10 = $fa4->fetch() ) { 
            $q10=$quat10['tamba4'];
            }
            while ( $quat11 = $tc4->fetch() ) { 
            $q11=$quat11['fatick4'];
            }
            while ( $quat12 = $se4->fetch() ) { 
            $q12=$quat12['sedhiou4'];
            }
            while ( $quat13 = $lg4->fetch() ) { 
            $q13=$quat13['louga4'];
            }
            while ( $quat14 = $sl4->fetch() ) { 
            $q14=$quat14['saintl4'];
            }

            // Travqille pas 
            while ( $trav = $dk5->fetch() ) { 
            $tp1=$trav['dakar5'];
            }
            while ( $trav1 = $th5->fetch() ) { 
            $tp2=$trav1['thies5'];
            }
            while ( $trav3 = $dl5->fetch() ) { 
            $tp3=$trav3['diourbel5'];
            }
            while ( $trav4 = $kl5->fetch() ) { 
            $tp4=$trav4['kaolack5'];
            }
            while ( $trav5 = $kf5->fetch() ) { 
            $tp5=$trav5['kaffrine5'];
            }
            while ( $trav6 = $kd5->fetch() ) { 
            $tp6=$trav6['kedougou5'];
            }
            while ( $trav7 = $ma5->fetch() ) { 
            $tp7=$trav7['matam5'];
            }
            while ( $trav8 = $zg5->fetch() ) { 
            $tp8=$trav8['zig5'];
            }
            while ( $trav9 = $kol5->fetch() ) { 
            $tp9=$trav9['kolda5'];
            }
            while ( $trav10 = $fa5->fetch() ) { 
            $tp10=$trav10['tamba5'];
            }
            while ( $trav11 = $tc5->fetch() ) { 
            $tp11=$trav11['fatick5'];
            }
            while ( $trav12 = $se5->fetch() ) { 
            $tp12=$trav12['sedhiou5'];
            }
            while ( $trav13 = $lg5->fetch() ) { 
            $tp13=$trav13['louga5'];
            }
            while ( $trav14 = $sl5->fetch() ) { 
            $tp14=$trav14['saintl5'];
            }

                // Termine le traitement de la requête 
                $dk->closeCursor();
            //Primaire
            $p1=$p1*100/$r1;
            $p2=$p2*100/$r2;
            $p3=$p3*100/$r3;
            $p4=$p4*100/$r4;
            $p5=$p5*100/$r5;
            $p6=$p6*100/$r6;
            $p7=$p7*100/$r7;
            $p8=$p8*100/$r8;
            $p9=$p9*100/$r9;
            $p10=$p10*100/$r10;
            $p11=$p11*100/$r11;
            $p12=$p12*100/$r12;
            $p13=$p13*100/$r13;
            $p14=$p14*100/$r14;

            //Secondaire
            $s1=$s1*100/$r1;
            $s2=$s2*100/$r2;
            $s3=$s3*100/$r3;
            $s4=$s4*100/$r4;
            $s5=$s5*100/$r5;
            $s6=$s6*100/$r6;
            $s7=$s7*100/$r7;
            $s8=$s8*100/$r8;
            $s9=$s9*100/$r9;
            $s10=$s10*100/$r10;
            $s11=$s11*100/$r11;
            $s12=$s12*100/$r12;
            $s13=$s13*100/$r13;
            $s14=$s14*100/$r14;

            //Tertiaire
            $t1=$t1*100/$r1;
            $t2=$t2*100/$r2;
            $t3=$t3*100/$r3;
            $t4=$t4*100/$r4;
            $t5=$t5*100/$r5;
            $t6=$t6*100/$r6;
            $t7=$t7*100/$r7;
            $t8=$t8*100/$r8;
            $t9=$t9*100/$r9;
            $t10=$t10*100/$r10;
            $t11=$t11*100/$r11;
            $t12=$t12*100/$r12;
            $t13=$t13*100/$r13;
            $t14=$t14*100/$r14;

            //Quaternaire
            $q1=$q1*100/$r1;
            $q2=$q2*100/$r2;
            $q3=$q3*100/$r3;
            $q4=$q4*100/$r4;
            $q5=$q5*100/$r5;
            $q6=$q6*100/$r6;
            $q7=$q7*100/$r7;
            $q8=$q8*100/$r8;
            $q9=$q9*100/$r9;
            $q10=$q10*100/$r10;
            $q11=$q11*100/$r11;
            $q12=$q12*100/$r12;
            $q13=$q13*100/$r13;
            $q14=$q14*100/$r14;

            //Travaille pas
            $tp1=$tp1*100/$r1;
            $tp2=$tp2*100/$r2;
            $tp3=$tp3*100/$r3;
            $tp4=$tp4*100/$r4;
            $tp5=$tp5*100/$r5;
            $tp6=$tp6*100/$r6;
            $tp7=$tp7*100/$r7;
            $tp8=$tp8*100/$r8;
            $tp9=$tp9*100/$r9;
            $tp10=$tp10*100/$r10;
            $tp11=$tp11*100/$r11;
            $tp12=$tp12*100/$r12;
            $tp13=$tp13*100/$r13;
            $tp14=$tp14*100/$r14;

            echo'<p>Pour les parents des étudiants qui habitent Dakar: <b>'.number_format($p1,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s1,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t1,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q1,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp1,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Thiès: <b>'.number_format($p2,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s2,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t2,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q2,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp2,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Diourbel: <b>'.number_format($p3,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s3,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t3,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q3,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp3,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Kaolack: <b>'.number_format($p4,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s4,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t4,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q4,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp4,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Kaffrine: <b>'.number_format($p5,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s5,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t5,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q5,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp5,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Kédougou: <b>'.number_format($p6,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s6,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t6,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q6,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp6,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Matam: <b>'.number_format($p7,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s7,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t7,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q7,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp7,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Ziguinchor: <b>'.number_format($p8,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s8,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t8,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q8,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp8,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Kolda: <b>'.number_format($p9,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s9,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t9,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q9,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp9,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Tambacounda: <b>'.number_format($p10,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s10,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t10,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q10,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp10,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Fatick: <b>'.number_format($p11,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s11,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t11,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q11,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp11,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Sedhiou: <b>'.number_format($p12,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s12,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t12,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q12,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp12,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Louga: <b>'.number_format($p13,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s13,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t13,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q13,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp13,2).'%</b> ne travaillent pas.</br>
            Pour les parents des étudiants qui habitent Saint-Louis: <b>'.number_format($p14,2).'%</b> sont dans le secteur primaire ; <b>'.number_format($s14,2).'%</b> sont dans le secteur secondaire ; <b>'.number_format($t14,2).'%</b> sont dans le secteur tertiaire ; <b>'.number_format($q14,2).'%</b> sont dans le quaternaire et <b>'.number_format($tp14,2).'%</b> ne travaillent pas.</br></p>'
            ?>
          </div>
          <!--Niveau 4-->
          <div id='b4'><a class='glyphicon glyphicon-hand-right' href='#'> Qualité enseignement UFR SES</a></div>
          <div id="a4">
            <?php
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

                echo '<p><b>'.number_format($a1,2).'%</b> des étudiants sont très satisfaits de l\'enseignement ; <b>'.number_format($a2,2).'%</b> sont satisfaits ; <b>'.number_format($a3,2).'%</b> sont favorables pour un enseignement moyen ; <b>'.number_format($a4,2).'%</b> sont insatisfaits et <b>'.number_format($a5,2).'%</b> ne sont pas du tout satisfaits.</p>';
            ?>
          </div>
          <!--Niveau 5-->
          <div id='b5'><a class='glyphicon glyphicon-hand-right' href='#'> Proportion revenu supérieur à 40000 au niveau des régions</a></div>
          <div id='a5'>
             <?php
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
            echo'<p>La proportion des étudiants qui ont un revenu supérieur à 40 000 frcs CFA se résument comme suit:<br/><b>'
            .number_format($a1,2).'%</b> pour Dakar ;<br/><b>'
            .number_format($a2,2).'%</b> pour Thiès ;<br/><b>'
            .number_format($a3,2).'%</b> pour Diourbel ;<br/><b>'
            .number_format($a4,2).'%</b> pour Ziguinchor ;<br/><b>'
            .number_format($a5,2).'%</b> pour Kolda ;<br/><b>'
            .number_format($a6,2).'%</b> pour Matam ;<br/><b>'
            .number_format($a7,2).'%</b> pour Sédhiou ;<br/><b>'
            .number_format($a8,2).'%</b> pour Kaolack ;<br/><b>'
            .number_format($a9,2).'%</b> pour Louga ;<br/><b>'
            .number_format($a10,2).'%</b> pour Saint-Louis ;<br/><b>'
            .number_format($a11,2).'%</b> pour Kaffrine ;<br/><b>'
            .number_format($a12,2).'%</b> pour Fatick ;<br/><b>'
            .number_format($a13,2).'%</b> pour Tambacounda ;<br/><b>'
            .number_format($a14,2).'%</b> pour Kédougou ;<br/></p>';
             ?> 
          </div>
          <div id='b6'><a class='glyphicon glyphicon-hand-right' href='#'> Les étudiants qui ont au moins la mention assez bien</a></div>
          <div id='a6'>
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
    $reponse13 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa13 FROM gestu WHERE jobPa LIKE "%primaire%"' );
    $reponse14 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa14 FROM gestu WHERE jobPa LIKE "%secondaire%"' );
    $reponse15 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa15 FROM gestu WHERE jobPa LIKE "%tertiaire%"' );
    $reponse16 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa16 FROM gestu WHERE jobPa LIKE "%quaternaire%"' );
    $reponse17 = $bdd->query('SELECT COUNT(jobPa) AS nbrejobPa17 FROM gestu WHERE jobPa LIKE "travaille pas%"' );

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
                echo'<ul>
                    <li><a href="#" class="glyphicon glyphicon-hand-down"> Logement</a></br><p><b>'.number_format($a1,2).'%</b> sont au site VCN ; <b>'.number_format($a2,2).'%</b> sont à l\'hôtel du rail ; <b>'.number_format($a3,2).'%</b> se retrouvent chez les amicales ; <b>'.number_format($a4,2).'%</b> ont trouvé une location et <b>'.number_format($a5,2).'%</b> vivent chez leurs parents ou tuteurs.</p></li>
                    <li><a href="#" class="glyphicon glyphicon-hand-down"> SatisfactionsLogement</a></br><p><b>'.number_format($c1,2).'%</b> sont très satisfaits de leur habitation; <b>'.number_format($c2,2).'%</b> sont satisfaits ; <b>'.number_format($c3,2).'%</b> le trouvent normal ; <b>'.number_format($c4,2).'%</b> sont insatisfaits et <b>'.number_format($c5,2).'%</b> ne sont pas du tout satisfaits.</p></li>
                    <li><a href="#" class="glyphicon glyphicon-hand-down"> Revenus</a></br><p><b>'.number_format($b1,2).'%</b> vivent au plus avec 40000 francs CFA et <b>'.number_format($b2,2).'%</b> ont plus de 40 000 comme revenu mensuelle.</p></li>
                    <li><a href="#" class="glyphicon glyphicon-hand-down"> Secteurs où travaille le papa</a></br><p><b>'.number_format($d1,2).'%</b> de ces parents d\'étudiants sont dans le secteur primaire ; <b>'.number_format($d2,2).'%</b> sont dans le secondaire ; <b>'.number_format($d3,2).'%</b> sont dans le tertiare ; <b>'.number_format($d4,2).'%</b> sont dans le quaternaire et <b>'.number_format($d5,2).'%</b> ne travaillent pas ou ne travaillent plus.</p></li>
                </ul>';
            ?> 
          </div>
          <style>
            body{
                background-image:url('../images/dernier.jpg');
                background-size:100%;
                background-attachment:fixed;
                color:white;
            }
            b{
                color:red;
            }
              a{
                  color:red;
              }
              a:hover{
                  text-decoration:none;
              }
              li{
                  list-style-type:none;
              }
              div{
                  text-align:center;
                  /*margin-top: 2%;*/
                  color:white;
              }
              #a1,#a2,#a3,#a4,#a5,#a6,#b1,#b2,#b3,#b4,#b5,#b6{
                margin-top: 2%;
                color:white;
              }
          </style>
        <script>
            document.getElementById('a1').style.display='none';
            document.getElementById('a2').style.display='none';
            document.getElementById('a3').style.display='none';
            document.getElementById('a4').style.display='none';
            document.getElementById('a5').style.display='none';
            document.getElementById('a6').style.display='none';
            var aff1=document.getElementById('b1');
            aff1.addEventListener('click', afficher1);
            function afficher1(){
                document.getElementById('a1').style.display='block';
                document.getElementById('a2').style.display='none';
                document.getElementById('a3').style.display='none';
                document.getElementById('a4').style.display='none';
                document.getElementById('a5').style.display='none';
                document.getElementById('a6').style.display='none';
            }
            var aff2=document.getElementById('b2');
            aff2.addEventListener('click', afficher2);
            function afficher2(){
                document.getElementById('a2').style.display='block';
                document.getElementById('a1').style.display='none';
                document.getElementById('a3').style.display='none';
                document.getElementById('a4').style.display='none';
                document.getElementById('a5').style.display='none';
                document.getElementById('a6').style.display='none';
            }
            var aff3=document.getElementById('b3');
            aff3.addEventListener('click', afficher3);
            function afficher3(){
                document.getElementById('a3').style.display='block';
                document.getElementById('a2').style.display='none';
                document.getElementById('a1').style.display='none';
                document.getElementById('a4').style.display='none';
                document.getElementById('a5').style.display='none';
                document.getElementById('a6').style.display='none';
            }
            var aff4=document.getElementById('b4');
            aff4.addEventListener('click', afficher4);
            function afficher4(){
                document.getElementById('a4').style.display='block';
                document.getElementById('a2').style.display='none';
                document.getElementById('a3').style.display='none';
                document.getElementById('a1').style.display='none';
                document.getElementById('a5').style.display='none';
                document.getElementById('a6').style.display='none';
            }
            var aff5=document.getElementById('b5');
            aff5.addEventListener('click', afficher5);
            function afficher5(){
                document.getElementById('a5').style.display='block';
                document.getElementById('a2').style.display='none';
                document.getElementById('a3').style.display='none';
                document.getElementById('a4').style.display='none';
                document.getElementById('a1').style.display='none';
                document.getElementById('a6').style.display='none';
            }
            var aff6=document.getElementById('b6');
            aff6.addEventListener('click', afficher6);
            function afficher6(){
                document.getElementById('a6').style.display='block';
                document.getElementById('a2').style.display='none';
                document.getElementById('a3').style.display='none';
                document.getElementById('a4').style.display='none';
                document.getElementById('a5').style.display='none';
                document.getElementById('a1').style.display='none';
            }
        </script>
        
    </body>
</html>