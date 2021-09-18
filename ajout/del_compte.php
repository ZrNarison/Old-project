<?php
require_once("ongbase.php");
$uti=mb_strtoupper($_POST["edituser"]);
$old=$_POST["ancien"];

$requete="DELETE  FROM compte WHERE user = '".($uti)."' AND mdp = '".($old)."'";
$retour=$pdo->prepare($requete);
$retour->execute();

header("location:../compte.php");
?>