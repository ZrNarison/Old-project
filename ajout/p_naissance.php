<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$d =$_POST["a1"];
		$e =$_POST["a2"];
		$f =$_POST["a3"];
		$g =$_POST["a4"];
		$h =$_POST["a5"];
$ajout=$pdo->prepare("INSERT INTO naissance(code_site,dateact,recences,vivant,morts_nes,poids,taille)VALUES(?,?,?,?,?,?,?)");
$act=array($a,$b,$d,$e,$f,$g,$h);
$ajout->execute($act);//$act
	header("location:../enfant_0a59.php");
 ?>