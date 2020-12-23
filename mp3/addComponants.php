<?php
  session_start();
  $request = $connection->prepare("SELECT * FROM stockcomposants");
  $request->execute();

  $correct = 1;
  if (empty($_POST['compReference']) > 130 ) {
    $correct = 0;
  }

  if (empty($_POST['compName']) > 130 ) {
    $correct = 0;
  }

  if (empty($_POST['compBoitier']) > 130 ) {
    $correct = 0;
  }

  if ($_POST['Age'] > 130 ) {
    $correct = 0;
  }
  if ($_POST['Age'] < 1 ) {
    $correct = 0;
  }
  if (empty($_POST["FirstName"])) {
    $correct = 0;
  }
  if (empty($_POST['SecoundName'])) {
    $correct = 0;
  }
  if (empty($_POST['Classe'])) {
    $correct = 0;
  }


  if ($correct == 0) {
    header('Location:index.php');
  }



  $insertion = "INSERT INTO stockcomposants (id,reference,nom,boitier,prixHT,qteStock) VALUES (UUID_TO_BIN(UUID()),$_POST['reference'],'16F876','DIL28','18','100')";
  $connection->exec($insertion);
?>
