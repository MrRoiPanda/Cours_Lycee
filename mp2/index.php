<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dice Master</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="content">
      <h3>Choose the good nuber or die</h3>
      <form class="" action="randomize.php" method="post">
        <input id="number" type="number" name="number" value="" placeholder="0 à 9" required min="0" max="9" step="1">
        <input id="button" type="submit" name="roll" value="roll">
      </form>
      <?php
        if (isset($_COOKIE["dice"])) {
          echo $_COOKIE["dice"];
          echo "<br>";
        }
        if (isset($_COOKIE["nb"])) {
          echo $_COOKIE["nb"];
        }
      ?>
    </div>
  </body>
</html>
