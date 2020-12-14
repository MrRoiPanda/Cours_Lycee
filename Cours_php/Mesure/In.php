<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset="utf-8"/>
  <title>Mesure Vm</title>
 </head>
<body>
<?php
//CSV ( pour Comma Separated Values ) qu'on pourrait traduire par
// "Valeurs séparées par des virgules" est un format de données
// où les valeurs sont comme son nom l'indique séparées par des virgules.
// les lignes du tableau De la tension
$Vm[] = array('n_x_Te' , 'Vmesuree');
$Vm[] = array(0 , 0 );
$Vm[] = array(1 , 1.75);
$Vm[] = array(2 , 3.25);
$Vm[] = array(3 , 5);
$Vm[] = array(4 , 5);
$Vm[] = array(5 , 5);
$Vm[] = array(6 , 5);
$Vm[] = array(7 , 2);
$Vm[] = array(8 , 2);
$Vm[] = array(9 , 2);
$Vm[] = array(10 , 2);


// les lignes du tableau De la tension
$Ic[] = array('n_x_Te' , 'ICalculer');

for ($i=1; $i < 12 ; $i++) {
  $Ic = array($Vm[$i][0] , $Vm[$i][1] /1000 );
}

foreach ($Ic as $value) {
  print_r($value)."<br>";
}

$delimiteur = "\t";

$chemin ='releve_tension.csv';
$releve_tension = fopen($chemin, 'w');
foreach($Vm as $ligne)
	{
		fputcsv($releve_tension, $ligne, $delimiteur);
	}
fclose($releve_tension);

$chemin ='calcule_intensiter.csv';
$calcule_intensiter = fopen($chemin, 'w');
foreach($Ic as $ligne)
	{
		fputcsv($calcule_intensiter, $ligne, $delimiteur);
	}
fclose($calcule_intensiter);
?>
</body>
</html>
