<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec =$_POST["a1"];$dis =$_POST["b1"];$mes1_23 =$_POST["c1"];

$e_zazato  =$pdo->prepare("INSERT INTO agr(code_site,dateact,benef,oper,exte)VALUES(?,?,?,?,?)");
$a_zazato  =array($a,$b,$rec,$dis,$mes1_23);
$e_zazato->execute($a_zazato);
	header("location:../agr_acn.php");
 ?>