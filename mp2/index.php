<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dice Master</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <?php
    session_start();
    if (!isset($_SESSION['visite'])) {
      $_SESSION['visite'] = 1;
      setcookie("dice",0);
    }
    else {
      $_SESSION['visite']++;
    }
  ?>
  <body>
    <?php
      include "content.php";
    ?>
  </body>
</html>
