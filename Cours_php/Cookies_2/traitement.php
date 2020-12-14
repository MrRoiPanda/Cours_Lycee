<?php
setcookie("pseudo",$_POST['pseudo'], time() + 365*24*3600,null,null,false,true);
setcookie("pays",$_POST['pays'], time() + 365*24*3600,null,null,false,true);
header('Location:formulaire.php');
?>
