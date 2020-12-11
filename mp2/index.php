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
        <p>vdgdf</p>
        <p>dfgdgd</p>
      </div>
      <div class="visual">
        <h2>
          <?php
            if (isset($_COOKIE["nb"])) {
              echo $_COOKIE["nb"];
            }
          ?>
        </h2>
        <img class="icon" src="img/d10.svg" alt="">
        <h2>
          <?php
            if (isset($_COOKIE["dice"])) {
              echo $_COOKIE["dice"];
            }
          ?>
        </h2>
      </div>
      <div class="input">
        <form class="" action="randomize.php" method="post">
          <input id="number" type="number" name="number" value="" placeholder="0 à 9" required min="0" max="9" step="1">
          <input id="button" type="submit" name="roll" value="roll">
        </form>
      </div>
    </div>
  </body>
</html>
