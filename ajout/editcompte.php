<?php
require_once("ongbase.php");
$uti 	=mb_strtoupper($_POST["edituser"]);
$new_uti=mb_strtoupper($_POST["new_user"]);
$old	=$_POST["ancien"];
$new 	=$_POST["new"];

if ($new_uti <>"") {
	$requete="UPDATE `compte` SET `user` = '".($new_uti)."',`mdp` = '".($new)."' WHERE user = '".($uti)."' AND mdp = '".($old)."'";
	$retour=$pdo->prepare($requete);
	$retour->execute();
	header("location:../compte.php");
}else{
	$requete="UPDATE `compte` SET `mdp` = '".($new)."' WHERE user = '".($uti)."' AND mdp = '".($old)."'";
	$retour=$pdo->prepare($requete);
	$retour->execute();
	header("location:../compte.php");}
?>