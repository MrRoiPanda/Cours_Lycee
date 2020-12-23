<?php
$request = $connection->prepare("SELECT * FROM stockcomposants");
$request->execute();
  echo "string";
/*
$insertion = "INSERT INTO stockcomposants (id,reference,nom,boitier,prixHT,qteStock) VALUES (UUID_TO_BIN(UUID()),'188 156','16F876','DIL28','18','100')";
$connection->exec($insertion);
  */
?>
