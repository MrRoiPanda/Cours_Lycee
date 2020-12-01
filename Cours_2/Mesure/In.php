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
// les lignes du tableau
$lignes[] = array('n_x_Te' , 'Vmesuree');
$lignes[] = array(0 , 0 );
$lignes[] = array(1 , 1.75);
$lignes[] = array(2 , 3.25);
$lignes[] = array(3 , 5);
$lignes[] = array(4 , 5);
$lignes[] = array(5 , 5);
$lignes[] = array(6 , 5);
$lignes[] = array(7 , 2);
$lignes[] = array(8 , 2);
$lignes[] = array(9 , 2);
$lignes[] = array(10 , 2);

// Paramétrage de l'écriture du futur fichier CSV
$chemin ='releve_tension.csv';
$delimiteur = "\t"; // Pour une tabulation, utiliser $delimiteur = "\t";
// Création du fichier csv (le fichier est vide pour le moment)
$releve_tension = fopen($chemin, 'w');
// Si le fichier a vocation a être importé dans Excel,
// On doit  impérativement utiliser la ligne ci-dessous pour corriger
// les problèmes d'affichage des caractères internationaux (les accents par exemple)
// fprintf($releve_tension, chr(0xEF).chr(0xBB).chr(0xBF));

// Boucle foreach sur chaque ligne du tableau
foreach($lignes as $ligne)
	{
		// chaque ligne en cours de lecture est insérée dans le fichier
		// les valeurs présentes dans chaque ligne seront séparées par $delimiteur
		fputcsv($releve_tension, $ligne, $delimiteur);
	}
	// fermeture du fichier csv
fclose($releve_tension);
?>
</body>
</html>
