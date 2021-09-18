<?php
	//Connection à la base de données
	require_once("ongbase.php");

	//Parametre et préparation de table d'insertion
	$sql="SELECT user FROM compte ORDER BY id";
	$req_lite=$pdo->prepare($sql);
	$req_lite->execute();
?>