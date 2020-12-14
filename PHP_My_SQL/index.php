<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
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
        $connection = new PDO("mysql:host=$server;port=3308;dbname=cinematheque1" , $login, $pass);
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection a la base de donne Réussie"."<br>";
        /// 2.2
        //$request = $connection->prepare("SELECT * FROM films_tim_burton");
        //$request->execute();
        //while($result = $request->fetch()){
          ///print_r($result);
        //  echo "Liste des films"."<br>";
        //  echo "Film N°".$result["ID"]." ".$result["title"]." avec".$result["acteurs_principaux"]." paru en".$result["anee"]." a pour etat :".$result["etat"]."<br>";
        //}
        /// 3.1
        $request = $connection->prepare("SELECT acteurs_principaux FROM films_tim_burton");
        $request->execute();
        while($result = $request->fetch()){
          ///print_r($result);
          echo "Liste des acteurs"."<br>";
          echo $result["acteurs_principaux"];
        }
      } catch (PDOException $e) {
        echo "Echec de la connection : ".$e->getMessage();
      }

      $connection = null;
    ?>
  </body>
</html>
