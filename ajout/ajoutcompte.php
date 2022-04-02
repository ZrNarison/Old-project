<?php
require_once("ongbase.php");
$uti=mb_strtoupper($_POST["compteuser"]);
$suit=mb_strtoupper($_POST["fonction"]);
$place=mb_strtoupper($_POST["lieu"]);
$new=$_POST["nouveau"];
$confir=$_POST["confirm"];

$req_perso="SELECT * FROM personnel WHERE fonction like'".$suit."'";
$re_pers=$pdo->prepare($req_perso);
$re_pers->execute();
$ret_per=$re_pers->fetch();

$requete="SELECT user AS us,fonction AS fon,Lieu AS endroit FROM compte WHERE fonction like'".$suit."'";
$retour=$pdo->prepare($requete);
$retour->execute();
$ret=$retour->fetch();

// function new_compte()
//* {
	/*echo(mb_strtoupper($ret_per["fonction"]));
	echo("/////////////////");
	echo($suit);
	*/
	if(mb_strtoupper($ret_per["fonction"])==$suit)
	{
		if (($ret["fon"]==$suit)||($ret["endroit"]==$place))
		{
				echo'<script type="text/javascript">alert(" Aia ianareo izao !")</script>';
				// print(mb_strtoupper($suit)." ".mb_strtoupper($place)." ".mb_strtoupper(" déjà un compte"));#Message envoyé
			}else {
				$pro=$pdo->prepare("INSERT INTO compte (user,Lieu,fonction,mdp) VALUES (?,?,?,?)");
				$pr=array($uti,$place,$suit,$new);
				$pro->execute($pr);
				header("location:../nouveau_compte.php");
			};
	}else
	{
		echo('<script type="text/javascript">alert(" ///// Vous n avez pas l autorisation de faire cette action ! ///// ")</script>');
		// print(mb_strtoupper("vous n'avez pas l'autorisation de faire cette action !"));#Message envoyé
		// .header("location:../nouveau_compte.php");
	};
// };
// return new_compte()*/;
?>