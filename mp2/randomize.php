<?php
/// Start

/// Aléa [0 - 9]
$d10 = rand (0 , 9);

/// Durée de vie des cookie
$temps = 60;

/// Dice value in cookie
setcookie("dice",$d10, time() + $temps);
setcookie("nb",$_POST['number'], time() + $temps);

header('Location:index.php');
?>
