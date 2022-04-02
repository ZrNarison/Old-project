<?php
//Connection à la base de données
require_once("ongbase.php");
	
//Parametre et préparation de table d'insertion
$prov 		 	=$_POST['codedistrict'];
$cod 		 	=$_POST['codedistrict'].$_POST['code'];
$commun		 	=mb_strtoupper($_POST['commune']);
$photocommune 	=mb_strtoupper($_FILES['photocommune']['name']);
$extension		=pathinfo($photocommune,PATHINFO_EXTENSION);
$fichierProv	=$_FILES['photocommune']['tmp_name'];
$piccom		    ='Commune_'.$commun.'.'.$extension;
move_uploaded_file($fichierProv,'../img/'.$piccom);

//Vérification de donnée de la base données
$requete="SELECT COUNT(nomcommune) AS verif_commune FROM commune WHERE nomcommune='".$cod."'";
$retour=$pdo->prepare($requete);
$retour->execute();
$ret=$retour->fetch();

if($ret["verif_commune"]>0)
    {
        echo($commun." ".("éxiste déjà dans la base de données communale"));#Message envoyé
    }
else{
        //Insertion de le champ de la table
        $pro=$pdo->prepare ("INSERT INTO commune (code_district,id_commune,nomcommune,photocommune) VALUES (?,?,?,?)");
        $pr=array($prov,$cod,$commun,$piccom);
        $pro->execute($pr);
        header("location:../nouveau_commune.php");
    }
?>