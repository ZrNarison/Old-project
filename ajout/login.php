<?php require_once("ongbase.php");

$utilisateur=$_post['pseudo'];
$code=md5($_POST['password']);
$ps=$pdo->prepare("SELECT * FROM compte WHERE user=? AND mdp=?");
$params=array($utilisateur,$code);
$ps->execute($params);

	if($user=$ps->fetch()){
		header("location:etudiants.php");
		}
	else{
		header("location:Index.php");
		}

 ?>