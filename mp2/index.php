<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dice Master</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico">
  </head>
  <body>
    <div class="content">
      <div class="instructions">
        <h1>Roll the Dice</h1>
        <p>Essayez de trouver la meme valeur que l'autre joueur</p>
      </div>
      <div class="visual">
        <h2>
          <?php
            if (isset($_SESSION["nb"])) {
              echo $_SESSION["nb"];
            }
          ?>
        </h2>
        <?php
          if (!isset($_SESSION["nb"]) && !isset($_SESSION["dice"])) {
            echo "<img class=\"icon\" src=\"img/d10.svg\">";
          }
          if (isset($_SESSION["dice"]) && isset($_SESSION["nb"])) {

            if($_SESSION["nb"] == $_SESSION["dice"]){
              echo "<img class=\"icon\" src=\"img/win.svg\">";
            }
            else {
              echo "<img class=\"icon\" src=\"img/lose.svg\">";
            }
          }

        ?>
        <h2>
          <?php
            if (isset($_SESSION["dice"])) {
              echo $_SESSION["dice"];
            }
          ?>
        </h2>
      </div>
      <div class="input">
        <form class="" action="randomize.php" method="post">
          <input id="number" type="number" name="number" value="" placeholder="0 à 10" required min="0" max="10" step="1">
          <input id="button" type="submit" name="roll" value="Roll">
        </form>
      </div>
    </div>
  </body>
</html>
<?php
  session_destroy();
?>
