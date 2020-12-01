<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COOKIES</title>
  </head>
  <body>
    <?php
    //mon cookie
    setcookie("moncookie","hello");
    echo "cookie crée"."<br>";
    // faut recharger la page
    echo "Valeur du cookie : ".$_COOKIE["moncookie"];

    // effacer un cookie = ne pas lui metre de valeur
    //setcookie("moncookie");
    ?>
  </body>
</html>
