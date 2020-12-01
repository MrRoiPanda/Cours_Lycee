<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="utf-8"/>
    <title>Tableaux en PHP</title>
   </head>
   <body>
     <?php
     $prenoms = array('Maria', 'Daisuke', 'Paul' , 'Nathan');
     //$prenoms[0] = 'Maria';
     //$prenoms[1] = 'Daisuke';
     //$prenoms[2] = 'Paul';
     $tab = count($prenoms);

     $age = array('Maria' => 24, 'Daisuke' => 22, 'Paul' => 'non renseigne' ,'Nathan' => '20');

     for ($i=0; $i < $tab ; $i++) {
       echo $prenoms[$i]." ".$age[$prenoms[$i]]."<br>";
     }
     ?>

   </body>
</html>
