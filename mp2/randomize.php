<?php
/// Start

/// Aléa [0 - 9]
$d10 = rand ( 0 , 9);

/// Dice value in cookie
setcookie("dice",$d10);
setcookie("nb",$_POST['number']);

echo $_COOKIE["dice"];
echo "<br>";
if (!empty($_COOKIE["nb"])) {
  echo $_COOKIE["nb"];
}

header('Location:index.php');
?>
