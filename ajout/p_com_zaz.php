<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec =$_POST["a1"];$dis =$_POST["b1"];$mes1_23 =$_POST["c1"];

$e_zazato  =$pdo->prepare("INSERT INTO zazatom(code_site,dateact,recue,distribue,recue_zzt)VALUES(?,?,?,?,?)");
$a_zazato  =array($a,$b,$rec,$dis,$mes1_23);
$e_zazato->execute($a_zazato);
	header("location:../allaitement_maternel.php");
 ?>