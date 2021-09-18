<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$r1 =$_POST["a1"];
		$r2 =$_POST["b1"];
		$r3 =$_POST["c1"];
		$r4 =$_POST["d1"];

$e_ref  =$pdo->prepare("INSERT INTO reference(code_site,dateact,r0a5,r6a11,r12a23,r24a59)VALUES(?,?,?,?,?,?)");
$a_ref  =array($a,$b,$r1,$r2,$r3,$r4);
$e_ref->execute($a_ref);
	header("location:../mes_taille.php");
 ?>