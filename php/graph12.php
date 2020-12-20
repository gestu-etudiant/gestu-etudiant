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
//bar1 Secteur primaire 14 colonnes
$data1y=array($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14);
//bar2
$data2y=array($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14);
//bar3
$data3y=array($t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14);
//bar4
$data4y=array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14);
//bar5
$data5y=array($tp1,$tp2,$tp3,$tp4,$tp5,$tp6,$tp7,$tp8,$tp9,$tp10,$tp11,$tp12,$tp13,$tp14);


//foreach ($data6y as &$y) { $y -=10; }

// Create the graph. These two calls are always required
$graph = new Graph(1000,390,'auto');
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
$graph->SetBox(true);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Dakar','Thies','Diourbel','Kaolack','Kaffrine','Kedougou','Matam','Zigunichor','Kolda','Tamba','Fatick','Sedhiou','Louga','Saint-Louis'));
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


// Create the grouped bar plot
   $gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot,$b5plot));

// ...and add it to the graPH
$graph->Add($gbplot);
//$graph->AddY2($lplot);

$b1plot->SetColor("#0000CD");
$b1plot->SetFillColor("aqua");
$b1plot->SetLegend("Secteur primaire");

$b2plot->SetColor("#B0C4DE");
$b2plot->SetFillColor("#ABC");
$b2plot->SetLegend("Secteur secondaire");

$b3plot->SetColor("#8B008B");
$b3plot->SetFillColor("indigo");
$b3plot->SetLegend("Secteur tertiaire");

$b4plot->SetColor("#DA70D6");
$b4plot->SetFillColor("orchid");
$b4plot->SetLegend("Secteur quaternaire");

$b5plot->SetColor("#9370DB");
$b5plot->SetFillColor("orangered");
$b5plot->SetLegend("travaille pas");

$graph->legend->SetFrameWeight(1);
$graph->legend->SetColumns(5);
$graph->legend->SetColor('#4E4E4E','#00A78A');

$band = new PlotBand(VERTICAL,BAND_RDIAG,14,"max",'khaki4');
$band->ShowFrame(true);
$band->SetOrder(DEPTH_BACK);
$graph->Add($band);

$graph->title->Set("Régions et Secteurs où évolue le papa");

// Display the graph
$graph->Stroke();
?>