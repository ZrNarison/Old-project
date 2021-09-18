<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec_5 =$_POST["a1"];
		$pz1_5 =$_POST["a2"];
		$rec_11 =$_POST["b1"];
		$pz1_11 =$_POST["b2"];
		$rec_23 =$_POST["c1"];
		$pz1_23 =$_POST["c2"];

$e_vad  =$pdo->prepare("INSERT INTO vad(code_site,dateact,p_m_0a23,p_m_24a59,p_f_enceinte,r_m_0a23,r_m_24a59,r_f_enceinte)VALUES(?,?,?,?,?,?,?,?)");
$a_vad  =array($a,$b,$rec_5,$pz1_5,$rec_11,$pz1_11,$rec_23,$pz1_23);
$e_vad->execute($a_vad);
	header("location:../reference.php");
 ?>