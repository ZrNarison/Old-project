<?php
	//Connection à la base de données
	require_once("ongbase.php");

//Parametre et préparation de table d'insertion
$prov 		 	=$_POST['codecommune'];
$cod 		 	=$_POST['codecommune'].$_POST['code'];
$quartier	 	=mb_strtoupper($_POST['site']);
$photosite 	 	=mb_strtoupper($_FILES['photosite']['name']);
$fichierProv	=$_FILES['photosite']['tmp_name'];
move_uploaded_file($fichierProv, '../img/Fokotany/'.$photosite);

//Vérification de donnée de la base données
$requete="SELECT COUNT(nom_site) AS verif_site FROM site WHERE nom_site='".$_POST['site']."'";
$retour=$pdo->prepare($requete);
$retour->execute();
$ret=$retour->fetch();
if ($ret["verif_site"]>0)
	{
		echo(mb_strtoupper($_POST['site'])." ".mb_strtoupper("éxiste déjà dans la base de données fokotany"));#Message envoyé
	}
else{
		//Insertion de le champ de la table
		$pro = $pdo -> prepare ("INSERT INTO site (code_commune,code_site,nom_site,photosite) VALUES (?,?,?,?)");
		$pr  = array($prov,$cod,$quartier,$photosite);
		$pro -> execute($pr);
		header("location:../nouveau_site.php");
	}
?>