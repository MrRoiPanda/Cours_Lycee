<?php
			$serveur = "localhost"; /* champ  serveur local */
			$login = "root";   /* champ  login */
			$pass = "";        /* champ  mot de passe */


			$connexion = new PDO("mysql:host=$serveur;port=3308;dbname=formulaire" , $login, $pass); /* connexion à la base de données PDO orientée objet permettant de travail avec 12 bases de données différentes*/



			$nom=$_GET["n"];
			$prenom=$_GET["p"];
			$mdp=$_GET["m"];
			$email=$_GET["e"];

			$insertion="INSERT INTO clients values ('$nom','$prenom','$mdp','$email')";
			$connexion->exec($insertion);
?>
