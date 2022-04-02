<?php
	//Connection à la base de données
	require_once("ongbase.php");

//Parametre et préparation de table d'insertion
$prov 		 	=$_POST['codecommune'];
$cod 		 	=$_POST['codecommune'].$_POST['code'];
$quartier	 	=mb_strtoupper($_POST['site']);
$photosite 	 	=mb_strtoupper($_FILES['photosite']['name']);
$extension		=pathinfo($photosite,PATHINFO_EXTENSION);
$picsite	    =$quartier.'.'.$extension;
$fichierProv	=$_FILES['photosite']['tmp_name'];
move_uploaded_file($fichierProv, '../img/'.$picsite);

//Vérification de donnée de la base données
$requete="SELECT COUNT(nomsite) AS verif_site FROM site WHERE nomsite='".$_POST['site']."'";
$retour=$pdo->prepare($requete);
$retour->execute();
$ret=$retour->fetch();
if ($ret["verif_site"]>0)
	{
		echo(mb_strtoupper($_POST['site'])." ".mb_strtoupper("éxiste déjà dans la base de données fokotany"));#Message envoyé
	}
else{
		//Insertion de le champ de la table
		$pro = $pdo -> prepare ("INSERT INTO site (codecommune,id_site,nomsite,photosite) VALUES (?,?,?,?)");
		$pr  = array($prov,$cod,$quartier,$picsite);
		$pro -> execute($pr);
		header("location:../nouveau_site.php");
	}
?>