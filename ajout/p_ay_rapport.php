<?php 
		
	$a =$_POST['site'];
	$b =$_POST['date'];
	$d =$_POST["a1"];
	$e =$_POST["a2"];

	function operation_bdd(){
		global $a,$b,$d,$e;
		$y =date("d-m-Y",(strtotime($b)));

		require_once("ongbase.php");

		$l_rappot=("SELECT codesite AS LIEU , ayantrapport AS AY,dateactivite AS TEMPS FROM activite WHERE codesite ='".$a."'");
		$req_rap=$pdo->prepare($l_rappot);
		$req_rap->execute();
		$req_ra=$req_rap->fetch();

		/*echo($b);echo("              -                   ");echo($req_ra['TEMPS']);*/

		require_once("verfi_site.php");

		$versite=("SELECT * FROM site WHERE code_site ='".$a."'");
		$vsite=$pdo->prepare($versite);
		$vsite->execute();
		$q=$vsite->fetch();
		
		if (($req_ra["LIEU"]==$a ) && ($req_ra['TEMPS']==$b)&& ($req_ra["AY"]==$e)){
				print(mb_strtoupper("l'activité à")." ".mb_strtoupper(($q['nom_site']))." DU ".mb_strtoupper($y)." ".mb_strtoupper("éxiste déjà dans la base de données"));#Message envoyé
			}else{
				$ajout=$pdo->prepare("INSERT INTO activite(codesite,dateactivite,OPER_FONC,AYANTRAPPORT)VALUES(?,?,?,?)");
				$act=array($a,$b,$d,$e);
				$ajout->execute($act);
				header("location:../femme_enceinte.php");
			};
/*
	if ($req_ra["LIEU"]==$a ){
		if ($req_ra['TEMPS']==$b){
			if ($req_ra["AY"]==$e){
				print(mb_strtoupper("l'activité à")." ".mb_strtoupper(($q['nom_site']))." DU ".mb_strtoupper($y)." ".mb_strtoupper("éxiste déjà dans la base de données"));#Message envoyé
			}else{
				$ajout=$pdo->prepare("INSERT INTO activite(codesite,dateactivite,OPER_FONC,AYANTRAPPORT)VALUES(?,?,?,?)");
				$act=array($a,$b,$d,$e);
				$ajout->execute($act);
				header("location:../affiche/femme_enceinte.php");
			};
		}else{
			$ajout=$pdo->prepare("INSERT INTO activite(codesite,dateactivite,OPER_FONC,AYANTRAPPORT)VALUES(?,?,?,?)");
			$act=array($a,$b,$d,$e);
			$ajout->execute($act);
			header("location:../affiche/femme_enceinte.php");
	};
}else{
		$ajout=$pdo->prepare("INSERT INTO activite(codesite,dateactivite,OPER_FONC,AYANTRAPPORT)VALUES(?,?,?,?)");
		$act=array($a,$b,$d,$e);
		$ajout->execute($act);
		header("location:../affiche/femme_enceinte.php");
	}*/
}
	operation_bdd()
 ?>