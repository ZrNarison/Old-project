<?php
	//Connection à la base de données
	require_once("ongbase.php");
	
	//Parametre et préparation de table d'insertion
	$prov 		 	=$_POST['codeprovince'];
	$cod 		 	=$_POST['codeprovince'].$_POST['code'];
	$regio		 	=mb_strtoupper($_POST['region']);
	$photoreg 	 	=mb_strtoupper($_FILES['photoregion']['name']);
	$fichierProv	=$_FILES['photoregion']['tmp_name'];
	move_uploaded_file($fichierProv,'../img/Region/'.$photoreg );
	//Vérification de donnée de la base données
	$requete="SELECT COUNT(nom_region) AS verif_region FROM region WHERE nom_region='".$_POST['region']."'";
	$retour=$pdo->prepare($requete);
	$retour->execute();
	$ret=$retour->fetch();

	if($ret["verif_region"]>0)
	{
		print(mb_strtoupper($_POST['region'])." ".mb_strtoupper("éxiste déjà"));#Message envoyé
	}
	else
		{	
			//Insertion de le champ de la table
			$pro = $pdo -> prepare ("INSERT INTO region (code_province,code_region,nom_region,photoregion) VALUES (?,?,?,?)");
			$pr  = array($prov,$cod,$regio,$photoreg);
			$pro -> execute($pr);
			header("location:../nouveau_region.php");
		}
?>