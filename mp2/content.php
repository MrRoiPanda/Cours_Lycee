<div class="content">
  <form class="" action="randomize.php" method="post">
    <input id="number" type="number" name="number" value="" placeholder="0 à 9" required min="0" max="9" step="1">
    <input id="button" type="submit" name="roll" value="roll">
  </form>
  <?php
    echo $_COOKIE["dice"];
    echo "<br>";
    if (!empty($_COOKIE["nb"])) {
      echo $_COOKIE["nb"];
    }
  ?>
</div>
