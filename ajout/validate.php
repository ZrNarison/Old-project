<?php
require_once("../ajout/ongbase.php");

$util=$_POST['pseudo'];
$code=$_POST['password'];

$requete=("SELECT user As uti, mdp As cd , fonction as fo, lieu As le from compte WHERE user='".($util)."'");
$req=$pdo->prepare($requete);
$req->execute();
$ret=$req->fetch();
$reqfon=("SELECT  fonct as f from fonction ");
$reqfo=$pdo->prepare($reqfon);
$reqfo->execute();
$retf=$reqfo->fetch();
if (($_POST['password'])==$ret["cd"])
	{
		if((mb_strtoupper("Responsable Suivie et Evaluation")==$ret["fo"])==$retf["f"])
			{
				// echo("Bonjour ".mb_strtoupper($ret["fo"]))
				header("location:../indexSite.php");
			}else if ((mb_strtoupper("Coordonateur regional")==$ret["fo"])==$retf["f"])
				{
					echo("Bonjour ".mb_strtoupper($ret["fo"]));
				}else if((mb_strtoupper("Comptable")==$ret["fo"])==$retf["f"])
					{
						echo("Bonjour ".mb_strtoupper($ret["fo"]));
					}else{
							header("location:../indexAffiche.php");
						}
	}else{
				echo(mb_strtoupper("Mot de pass incorrect !"));
		};
?>