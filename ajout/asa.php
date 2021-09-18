<?php 
$reg="SELECT * FROM region Group By codeprovince";
$re=$pdo->prepare($reg);
$re->execute() ;

$dist="SELECT * FROM district Group By coderegion";
$dis=$pdo->prepare($dist);
$dis->execute() ;

    ?>