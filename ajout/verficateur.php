<?php
require_once("ongbase.php");
$lieureq=('SELECT DISTINCT user from compte ORDER BY Id');
$lieure=$pdo->prepare($lieureq);
$lieure->execute();
?>