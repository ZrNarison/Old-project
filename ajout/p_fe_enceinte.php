<?php 
	require_once("ongbase.php");

		$a =$_POST['sitefm'];
		$b =$_POST['datefm'];
		$d =$_POST["a1fm"];
		$e =$_POST["a2fm"];
		$f =$_POST["a3fm"];
		$g =$_POST["a4fm"];
	
		$y =date("d-m-Y",(strtotime($b)));
		
			$req_site=("SELECT * FROM site WHERE code_site ='".$a."'");
			$vsite=$pdo->prepare($req_site);
			$vsite->execute();
			$q=$vsite->fetch();

		$l_rappot=("SELECT participant_en AS pen,dateact AS temp , refere_cpn AS rcnp FROM femmes_enceintes WHERE code_site like'".$a."'");
		$req_rap=$pdo->prepare($l_rappot);
		$req_rap->execute();
		$req_ra=$req_rap->fetch();

	if (($req_ra["temp"]==$b)&& ($req_ra["pen"]==$a)&&($req_ra["temp"]==$e))
	{
		echo(mb_strtoupper("déjà ajouter dans la base de données"));#Message envoyé
	}else{
		$ajout=$pdo->prepare("INSERT INTO femmes_enceintes(code_site,dateact,recence,refere_cpn,participant_en,accouchement_med)VALUES(?,?,?,?,?,?)");
		$act=array($a,$b,$d,$e,$f,$g);
		$ajout->execute($act);//$act
		header("location:../naissance.php");
	}
 ?>