<?php
$request = $connection->prepare("SELECT BIN_TO_UUID(id),reference,nom,boitier,prixHT,qteStock FROM stockcomposants");
$request->execute();

echo "<h2>Liste des composants</h2>";

echo "<section class=\"css-masonry\">";
while($result = $request->fetch()){
  echo "<div id=\"".$result["BIN_TO_UUID(id)"]."\" class=\"item\" >";
  echo "<h2>".$result["nom"]."</h2>";
  echo "<p>reference ".$result["reference"]."</p>";
  echo "<p>boitier ".$result["boitier"]."</p>";
  echo "<p>prix HT : ".$result["prixHT"]."€</p>";
  echo "<p>Qte disponible : ".$result["qteStock"]."</p>";
  echo "</div>";
}
echo "</section>";
?>
