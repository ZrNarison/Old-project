<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec_5 =$_POST["a1"];$pz1_5 =$_POST["a2"];$pz2_5 =$_POST["a3"];$pz3_5 =$_POST["a4"];

		$rec_11 =$_POST["b1"];$pz1_11 =$_POST["b2"];$pz2_11 =$_POST["b3"];$pz3_11 =$_POST["b4"];

		$rec_23 =$_POST["c1"];$pz1_23 =$_POST["c2"];$pz2_23 =$_POST["c3"];$pz3_23 =$_POST["c4"];

		$rec_59 =$_POST["d1"];$pz1_59 =$_POST["d2"];$pz2_59 =$_POST["d3"];$pz3_59 =$_POST["d4"];

$e0a5  =$pdo->prepare("INSERT INTO enf_0a5(code_site,dateact,recenses0a5,pesesZ1_0a5,pesesZ2_0a5,pesesZ3_0a5)VALUES(?,?,?,?,?,?)");
$a0a5  =array($a,$b,$rec_5,$pz1_5,$pz2_5,$pz3_5);
$e0a5->execute($a0a5);

$e6a11 =$pdo->prepare("INSERT INTO enf_6a11(code_site,dateact,recenses6a11,pesesZ1_6a11,pesesZ2_6a11,pesesZ3_6a11)VALUES(?,?,?,?,?,?)");
$a6a11 =array($a,$b,$rec_11,$pz1_11,$pz2_11,$pz3_11);
$e6a11->execute($a6a11);

$e12a23=$pdo->prepare("INSERT INTO enf_12a23(code_site,dateact,recenses12a23,pesesZ1_12a23,pesesZ2_12a23,pesesZ3_12a23)VALUES(?,?,?,?,?,?)");
$a12a23=array($a,$b,$rec_23,$pz1_23,$pz2_23,$pz3_23);
$e12a23->execute($a12a23);

$e24a59=$pdo->prepare("INSERT INTO enf_24a59(code_site,dateact,recenses24a59,pesesZ1_24a59,pesesZ2_24a59,pesesZ3_24a59)VALUES(?,?,?,?,?,?)");
$a24a59=array($a,$b,$rec_59,$pz1_59,$pz2_59,$pz3_59);
$e24a59->execute($a24a59);
	header("location:../enfant_6a59.php");
 ?>