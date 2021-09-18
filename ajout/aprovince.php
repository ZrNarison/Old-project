<?php
	require_once("ongbase.php");
	$b = $_POST['pp'];
	$pr=$pdo ->prepare("INSERT INTO province (nomPROVINCE) VALUES (?)");
	$r=array($b);
	$pr->execute($r);
	header("location:province.php");
?>