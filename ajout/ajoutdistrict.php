<?php
	//Connection à la base de données
	require_once("ongbase.php");
	//Parametre et préparation de table d'insertion
	$prov 		 	=$_POST['coderegion'];
	$cod 		 	=$_POST['coderegion'].$_POST['code'];
	$distric		 	=mb_strtoupper($_POST['district']);
	$photodistrict 	=mb_strtoupper($_FILES['photo_district']['name']);
	$fichierProv	=$_FILES['photo_district']['tmp_name'];
	move_uploaded_file($fichierProv,'../img/District/'.$photodistrict);

	//Vérification de donnée de la base données
	$requete="SELECT COUNT(nom_district) AS verif_distr FROM district WHERE nom_district='".$_POST['district']."'";
	$retour=$pdo->prepare($requete);
	$retour->execute();
	$ret=$retour->fetch();

	if($ret["verif_distr"]>0)
		{
			echo(mb_strtoupper($_POST['district'])." ".mb_strtoupper("éxiste déjà dans la base de données district"));#Message envoyé
		}
	else
		{//Insertion de le champ de la table
			$pro=$pdo->prepare ("INSERT INTO district (code_region,code_district,nom_district,photodistrict) VALUES (?,?,?,?)");
			$pr=array($prov,$cod,$distric,$photodistrict);
			$pro->execute($pr);
			header("location:../nouveau_district.php");
		}
?>