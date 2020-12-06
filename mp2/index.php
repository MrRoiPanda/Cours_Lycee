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
    }
    else {
      $_SESSION['visite'] = 2;
    }
  ?>
  <body>
    <div class="content">
      <form class="" action="randomize.php" method="post">
        <input id="number" type="number" name="number" value="" placeholder="0 à 9" required min="0" max="9" step="1">
        <input id="button" type="submit" name="roll" value="roll">
      </form>
      <?php
        if ($_SESSION['visite'] == 2) {
          if (!empty($_COOKIE["dice"])) {
            echo $_COOKIE["dice"];
            echo "<br>";
          }
          if (!empty($_COOKIE["nb"])) {
            echo $_COOKIE["nb"];
          }
        }
      ?>
    </div>
  </body>
</html>
