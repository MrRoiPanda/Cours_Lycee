<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="utf-8"/>
    <title>Tableaux en PHP</title>
   </head>
   <body>
     <?php
     $prenoms = array('Maria', 'Daisuke', 'Paul');
     //$prenoms[0] = 'Maria';
     //$prenoms[1] = 'Daisuke';
     //$prenoms[2] = 'Paul';

     $age = array('Maria' => 24, 'Daisuke' => 22, 'Paul' => 'non renseigne');

     echo $prenoms[0]."<br>";
     echo $age["Paul"]."<br>";
     ?>

   </body>
</html>
