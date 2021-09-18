<?php
include("ongbase.php");

$lie="SELECT * FROM site ORDER BY nom_site";
$li=$pdo->prepare($lie);
$li->execute();

?>