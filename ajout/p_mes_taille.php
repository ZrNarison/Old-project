<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$mes1_5 =$_POST["a1"]; $mes2_5 =$_POST["a3"]; $mes3_5 =$_POST["a4"];
		$mes1_11 =$_POST["b1"];$mes2_11 =$_POST["b3"];$mes3_11 =$_POST["b4"];
		$mes1_23 =$_POST["c1"];$mes2_23 =$_POST["c3"];$mes3_23 =$_POST["c4"];
		$mes1_59 =$_POST["d1"];$mes2_59 =$_POST["d3"];$mes3_59 =$_POST["d4"];

$e_met  =$pdo->prepare("INSERT INTO mes_taille(code_site,dateact,0a5m1,6a11m1,12a23m1,24a59m1,0a5m2,6a11m2,12a23m2,24a59m2,0a5m3,6a11m3,12a23m3,24a59m3)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$a_met  =array($a,$b,$mes1_5,$mes1_11,$mes1_23,$mes1_59,$mes2_5,$mes2_11,$mes2_23,$mes2_59,$mes3_5,$mes3_11,$mes3_23,$mes3_59);
$e_met->execute($a_met);
	header("location:../compulation_zazatomady.php");
 ?>