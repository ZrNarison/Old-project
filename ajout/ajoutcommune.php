<?php
//Connection à la base de données
require_once("ongbase.php");
	
//Parametre et préparation de table d'insertion
$prov 		 	=$_POST['codedistrict'];
$cod 		 	=$_POST['codedistrict'].$_POST['code'];
$commun		 	=mb_strtoupper($_POST['commune']);
$photocommune 	=mb_strtoupper($_FILES['photocommune']['name']);
$fichierProv	=$_FILES['photocommune']['tmp_name'];
move_uploaded_file($fichierProv,'../img/Commune/'.$photocommune);
//Vérification de donnée de la base données
$requete="SELECT COUNT(nom_commune) AS verif_commune FROM commune WHERE nom_commune='".$cod."'";
$retour=$pdo->prepare($requete);
$retour->execute();
$ret=$retour->fetch();

if($ret["verif_commune"]>0)
    {
        echo($commun." ".("éxiste déjà dans la base de données communale")));#Message envoyé
    }
else{
        //Insertion de le champ de la table
        $pro=$pdo->prepare ("INSERT INTO commune (code_district,code_commune,nom_commune,photocommune) VALUES (?,?,?,?)");
        $pr=array($prov,$cod,$commun,$photocommune);
        $pro->execute($pr);
        header("location:../nouveau_commune.php");
    }
?>