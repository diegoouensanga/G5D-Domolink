<?php
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

$mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');
$donnee = Database::execute ('SELECT valeurs FROM Statistiques WHERE valeurs = :valeurs' ,array( 'valeurs'=>['valeurs']));
$test= array(3,4,5,8,10);

$graph = new Graph(350,250);
$graph->SetScale("textlin"); //mettre du texte en abscisse


$theme_class= new UniversalTheme;

$g1=new LinePlot($donnee);
$g1->SetLegend('Consommation');
$g1->SetColor('blue');
$g1->SetCenter();


//Add the line at the graph
$graph->Add($g1);

// Display the graph
$graph->Stroke();
?>




