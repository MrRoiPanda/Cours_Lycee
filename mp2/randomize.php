<?php
/// Start

/// Aléa [0 - 9]
$d10 = rand ( 0 , 9);

/// Dice value in cookie
setcookie("dice",$d10);
setcookie("nb",$_POST['number']);

header('Location:index.php');
?>
