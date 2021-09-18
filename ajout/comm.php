<?php
	//Connection à la base de données
	require_once("ongbase.php");
	//Parametre et préparation de table d'insertion
	try {
	
	//inserer dans commune
	$a = $_POST['1a'];
	$b = $_POST['2a'];
	$c = $_POST['3a'];
	$d = $_POST['4a'];
	
	//Insertion de le champ de la table
	$ps = $pdo -> prepare ("INSERT INTO lieu (nomregion,nomdistrict,nomcommune,nomsite) VALUES ('$a','$b','$c','$d')");
	
	//$params=array($a,$b,$dnais,$c);
	$ps->execute();
	//header("location:index.php");
	if ($ps){
		header("location:lieu.php");
	}
	else echo "Essaye encore";
	} 
	catch ( PDOException $e){
    $msg ='Erreur ENTREE dans'. $e->getmessage();
    die ($msg);}
	
?>