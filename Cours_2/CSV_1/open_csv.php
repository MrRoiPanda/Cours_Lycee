<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $ligne = 1;
    $fic = fopen("File_Save/fichier.csv", "a+");
    while ($tb = fgetcsv($fic,1024,"\t")) {
      $champs = count($tb);
      echo "<b> Les ".$champs." champs de la ligne ".$ligne." sont : </b>";
      $ligne++;

      for ($i=0; $i < $champs ; $i++) {
        echo $tb[$i]." ";

      }
      echo "<br />";
    }
    fclose($fic);

    ?>

  </body>
</html>
