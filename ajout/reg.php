<?php
	//Connection à la base de données
	require_once("ongbase.php");
	//Parametre et préparation de table d'insertion
	try {
	$a    = $_POST['cc'];
	$b = $_POST['nc'];
	$c  = $_POST['ns'];
	
	
	//Insertion de le champ de la table
	$ps = $pdo -> prepare ("INSERT INTO commune (code_commune,nom_commune,code_site) VALUES ('$a','$b','$c')");
	
	//$params=array($a,$b,$dnais,$c);
	$ps->execute();
	//header("location:index.php");
	if ($ps){
		header("location:reconnaissancedistrict.php");
	}
	else echo "Essaye encore";
	} 
	catch ( PDOException $e){
    $msg ='Erreur entrée dans'. $e->getmessage();
    die ($msg);}
	
?>