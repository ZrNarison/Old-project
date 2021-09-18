<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec_5 =$_POST["a1"];
		$pz1_5 =$_POST["b1"];
		$pz2_5 =$_POST["c1"];
		$pz3_5 =$_POST["d1"];
		

$e6a59  =$pdo->prepare("INSERT INTO edn(code_site,dateact,0a23_recenses,0a23_p_en,24a59_recenses,24a59_p_en)VALUES(?,?,?,?,?,?)");
$a6a59  =array($a,$b,$rec_5,$pz1_5,$pz2_5,$pz3_5);
$e6a59->execute($a6a59);
	header("location:../visite_a_domicile.php");
 ?>