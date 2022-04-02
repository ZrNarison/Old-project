<?php
	//Connection à la base de données
	require_once("ongbase.php");

	//Récuperation de données envoyé
	$cod 		 	=$_POST['code'];
	$prov 		 	=mb_strtoupper($_POST['provin']);
	$photoprov 	 	=mb_strtoupper($_FILES['photo_province']['name']);
	$extension		=pathinfo($photoprov,PATHINFO_EXTENSION);
	$fichierProv	=$_FILES['photo_province']['tmp_name'];
	$pict			='Province_'.$prov.'.'.$extension;
	move_uploaded_file($fichierProv, '../img/'.$pict);

	//Vérification de donnée de la base données
	$requete="SELECT (id_province) AS codep,(nom_province) AS verif_prov,(photoprovince) AS verif_photoprov FROM province WHERE id_province='".$cod."' ";
	//$requete="SELECT * FROM province WHERE 1 ";
	$retour=$pdo->prepare($requete);
	$retour->execute();
	$ret=$retour->fetch();

	/*echo($ret["code_province"]);echo($ret["code_province"]);*/
	if (($ret["codep"]==$cod) || ($ret["verif_prov"]==$prov) || ($ret["verif_photoprov"]==$photoprov))
		{
			print($prov." ".mb_strtoupper("éxiste déjà dans la base de données"));#Message envoyé
		}
		else
		{	//Ajout de donées dans la base s'il n'existe pas
			$pro=$pdo->prepare("INSERT INTO province (id_province,nom_province,photoprovince) VALUES (?,?,?)");
			$pr=array($cod,$prov,$pict);
			$pro->execute($pr);
			header("location:../indexSite.php");
		};
?>