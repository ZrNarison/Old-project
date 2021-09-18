<?php require_once("../ajout/ongbase.php");
$liste="SELECT  * FROM compte ORDER BY fonction";
$li=$pdo->prepare($liste);
$li->execute();

?>