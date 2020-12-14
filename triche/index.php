<!DOCTYPE html>
<html lang="FR-fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $x = "7p";
    $y =(integer) $x;
    $x = "9E3";
    $z = (double) $x;

    echo $x."<br>" , $y."<br>" ,$z;
    ?>

    <?php
    function bool($value)
    {
      if ($value) {
        echo "TRUE <br/>";
      }
      else {
        echo "FALSE <br/>";
      }
    }
    $a ="0";
    $b ="TRUE";
    //$c = FALSE;
    $d = ($a OR $b);
    echo "\$a vaut :", bool($d);
    $f ($a XOR $b);
    ?>

  </body>
</html>
