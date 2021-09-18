<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$rec =$_POST["a1"];$dis =$_POST["b1"];$mes1_23 =$_POST["c1"];

$e_all_mat  =$pdo->prepare("INSERT INTO all_mat(code_site,dateact,0a5,6a11,12a23)VALUES(?,?,?,?,?)");
$a_all_mat  =array($a,$b,$rec,$dis,$mes1_23);
$e_all_mat->execute($a_all_mat);
	header("location:../agr_menage.php");
 ?>