
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION['visite'])) {
      $_SESSION['visite'] = 1;
      echo "premier visit";
    }
    else {
      $_SESSION['visite']++;
      echo "vous avez visité cete page ".$_SESSION['visite']." fois";
    }
    ?>    
  </body>
</html>
