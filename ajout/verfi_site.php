<?php
require_once("ongbase.php");
    $versite=("SELECT * FROM site WHERE code_site ='".$a."'");
    $vsite=$pdo->prepare($versite);
    $vsite->execute();
    $q=$vsite->fetch();
?>