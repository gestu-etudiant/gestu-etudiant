<?php // content="text/plain; charset=utf-8"
require_once ('../src/jpgraph.php');
require_once ('../src/jpgraph_line.php');

$datay = array(0,25,12,47,27,27,0);

// Setup the graph
$graph = new Graph(1200,450);
$graph->SetScale("intlin",0,$aYMax=50);

$theme_class= new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->SetMargin(40,40,50,40);

$graph->title->Set('Inverted Y-axis');
$graph->SetBox(false);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// For background to be gradient, setfill is needed first.
$graph->ygrid->SetFill(true,'#FFFFFF@0.5','#FFFFFF@0.5');
$graph->SetBackgroundGradient('bisque', '#15EE15', GRAD_HOR, BGRAD_PLOT);

$graph->xaxis->SetTickLabels(array('G','F','E','D','C','B','A'));
$graph->xaxis->SetLabelMargin(20);
$graph->yaxis->SetLabelMargin(20);

$graph->SetAxisStyle(AXSTYLE_BOXOUT);
$graph->img->SetAngle(180); 

// Create the line
$p1 = new LinePlot($datay);
$graph->Add($p1);

$p1->SetFillGradient('bisque','bisque');
$p1->SetColor('#aadddd');

// Output line
$graph->Stroke();

?>