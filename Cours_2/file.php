<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Creation d'un fichier</title>
  </head>
  <body>
    <?php
      $lignes[] = array('Prenom', 'Nom');                    //Les lignes du tableau
      $lignes[] = array('Adriana', 'Lima');
      $lignes[] = array('Carmen', 'Crue');
      $lignes[] = array('John', 'Doe');


      $chemin = 'File_Save/fichier.csv';                    //adressage relatif
      $delimiteur = ',';                                    //Pour une tabulation, utiliser $delimiteur = "\t"
      $fichier_csv = fopen($chemin, 'w+');                  //Création du fichier csv, w+ : en lecture/écriture


      foreach($lignes as $ligne)                            //Boucle foreach sur chaque ligne du tableau
      {
    	   fputcsv($fichier_csv, $ligne, $delimiteur);        //Chaque line est insérée dans le fichier
      }
      fclose($fichier_csv);
    ?>
   </body>
</html>
