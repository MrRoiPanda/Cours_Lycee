<?php
  $server = "localhost";
  $login = "root";
  $pass = "";
  $connection = new PDO("mysql:host=$server;port=3308;dbname=stock" , $login, $pass);

  try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection a la base de donne Réussie"."<br>";
  } catch (PDOException $e) {
    echo "Echec de la connection : ".$e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BDD</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h2>Ajouter des composants</h2>
    <form class="" action="addComponants.php" method="post">
      <label for="compReference">Reference</label>
      <input type="text" name="compReference" placeholder="188 156" required>

      <label for="compName">Nom</label>
      <input type="text" name="compName" placeholder="16F876" required>

      <label for="compBoitier">Boitier</label>
      <input type="text" name="compBoitier" placeholder="DIL28" required>

      <label for="compPrixHT">PrixHT</label>
      <input type="number" name="compPrixHT" placeholder="12,5" step="0.01" min="0" required>

      <label for="">Qte dispo</label>
      <input type="text" name="" placeholder="100" step="1" min="0">
      <input type="submit">
    </form>
    <?php
      include('readComponants.php');
      $connection = null;
     ?>
  </body>
</html>
