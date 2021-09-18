<?php
	//Connection à la base de données
	require_once("ongbase.php");
	
	$h = $_POST['co_province'];
	$i = $_POST['n_region'];
	
	
	//Insertion de le champ de la table
	$ps = $pdo -> prepare ("INSERT INTO region (nomregion,codeprovince) VALUES (?,?)");
	$arg=array($h,$i);
	$ps->execute($arg);
	header("location:../region.php");
	
?>