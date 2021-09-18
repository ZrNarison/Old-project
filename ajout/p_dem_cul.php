<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$dm1 =$_POST["a1"];$dm2 =$_POST["b1"];$dm3 =$_POST["c1"];$dm4 =$_POST["d1"];

$e_demc  =$pdo->prepare("INSERT INTO dc(code_site,dateact,dc0a5,dc6a11,dc12a23,dc24a59)VALUES(?,?,?,?,?,?)");
$a_demc  =array($a,$b,$dm1,$dm2,$dm3,$dm4);
$e_demc->execute($a_demc);
	header("location:../indexAffiche.php");
 ?>