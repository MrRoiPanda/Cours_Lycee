<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $server = "localhost";
      $login = "root";
      $pass = "";

      try {
        $connection = new PDO("mysql:host=$server;port=3308;dbname=stock" , $login, $pass);
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connection a la base de donne Réussie"."<br>";
/*
        $request = $connection->prepare("SELECT * FROM stockcomposants");
        $request->execute();
        $insertion = "INSERT INTO stockcomposants (id,reference,nom,boitier,prixHT,qteStock) VALUES (UUID_TO_BIN(UUID()),'188 156','16F876','DIL28','18','100')";
        $connection->exec($insertion);
*/
        $request = $connection->prepare("SELECT BIN_TO_UUID(id),reference,nom,boitier,prixHT,qteStock FROM stockcomposants");
        $request->execute();
        while($result = $request->fetch()){
          //print_r($result);
          echo "Liste des films"."<br>";
          echo "componant ".$result["BIN_TO_UUID(id)"]."||".$result["reference"]."||".$result["nom"]."||".$result["boitier"]."||".$result["prixHT"]."||".$result["qteStock"]."<br>";
          //

        }

      } catch (PDOException $e) {
        echo "Echec de la connection : ".$e->getMessage();
      }

      $connection = null;
    ?>
  </body>
</html>
