<?php
/// Start
session_start();
/// Aléa [0 - 9]
$d10 = rand (0 , 10);

/// Création de session
$_SESSION["dice"] = $d10;
$_SESSION["nb"] = $_POST['number'];

header('Location:index.php');
?>
