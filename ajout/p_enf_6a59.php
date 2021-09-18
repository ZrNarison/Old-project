<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec_5 =$_POST["a1"];
		$pz1_5 =$_POST["b1"];
		$pz2_5 =$_POST["c1"];
		$pz3_5 =$_POST["d1"];
		$pz4_5 =$_POST["e1"];
		$pz5_5 =$_POST["f1"];
		$pz6_5 =$_POST["g1"];
		$pz7_5 =$_POST["h1"];

$e6a59  =$pdo->prepare("INSERT INTO enf_6a59(code_site,dateact,recenses_6a59,muac_pb,pb115,pb115_125,pb115oedeme,115pb125oedeme,refere_creni,refere_crenas)VALUES(?,?,?,?,?,?,?,?,?,?)");
$a6a59  =array($a,$b,$rec_5,$pz1_5,$pz2_5,$pz3_5,$pz4_5,$pz5_5,$pz6_5,$pz7_5);
$e6a59->execute($a6a59);
	header("location:../Education_nutritionnelle.php");
 ?>