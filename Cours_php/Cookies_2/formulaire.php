<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta charset="utf-8">
    <title>Info cookie</title>
  </head>
  <body>
    <form class="" action="traitement.php" method="post">
      <p>Donne ton prénom de suite</p>
      <input type="text" name="pseudo" value="" placeholder="John">
      <input type="text" name="pays" value="" placeholder="France">
      <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <?php
    $cookie_ok = 1;
    if (empty($_COOKIE['pseudo'])) {
      $cookie_ok = 0;
    }
    if (empty($_COOKIE['pays'])) {
      $cookie_ok = 0;
    }
    if ($cookie_ok == 1) {
      echo "Je me souvien de toi ? tu serai pas : ";
      echo $_COOKIE['pseudo'];
      echo " et tu vien de : ";
      echo $_COOKIE['pays'];
      echo " j'ai bon ?";
    }
    if ($cookie_ok == 0) {
      echo "Marque tout sinon je te fait attendre è-é !!!!";
    }
    ?>
  </body>
</html>
