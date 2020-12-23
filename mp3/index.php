<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BDD</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
      $server = "localhost";
      $login = "root";
      $pass = "";
      $connection = new PDO("mysql:host=$server;port=3308;dbname=stock" , $login, $pass);

      try {
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection a la base de donne Réussie"."<br>";
      } catch (PDOException $e) {
        echo "Echec de la connection : ".$e->getMessage();
      }
    ?>
    <?php
      include('addComponants.php');
      include('readComponants.php');
      $connection = null;
     ?>
  </body>
</html>
