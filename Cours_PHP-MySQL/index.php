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
        //  print_r($result);
        //  echo "Liste des films"."<br>";
        //  echo "Film N°".$result["ID"]." ".$result["title"]." avec".$result["acteurs_principaux"]." paru en".$result["anee"]." a pour etat :".$result["etat"]."<br>";
        //}

        /// 3.1
        //$request = $connection->prepare("SELECT acteurs_principaux FROM films_tim_burton");
        //$request->execute();
        //while($result = $request->fetch()){
        //  print_r($result);
        //  echo "Liste des acteurs"."<br>";
        //  echo $result["acteurs_principaux"];
        //}

        /// 3.2
        //$request = $connection->prepare("SELECT acteurs_principaux FROM films_tim_burton WHERE genre ='fantastique'OR etat = 1 ");
        //$request->execute();
        //while($result = $request->fetch()){
        //  print_r($result);
        //  echo "Liste des acteurs"."<br>";
        //  echo $result["acteurs_principaux"];
        //}

        /// 3.3
        //$request = $connection->prepare("SELECT * FROM films_freres_coen");
        //$request->execute();
        //$insertion = "INSERT INTO films_freres_coen (ID,title,acteurs_principaux,anee,genre,etat) VALUES ('8','A serious man',': Stuhlbarg, Kind, Lennick','2009','comedie','1')";
        //$connection->exec($insertion);

        /// 3.4
        //$modif = "UPDATE films_freres_coen SET annee = 2010 WHERE ID=8";
        //$connection->exec($modif);

        /// 3.5
        //$delete = "DELETE FROM films_freres_coen WHERE ID=8" ;
        //$connection->exec($delete);

      } catch (PDOException $e) {
        echo "Echec de la connection : ".$e->getMessage();
      }

      $connection = null;
    ?>
  </body>
</html>
