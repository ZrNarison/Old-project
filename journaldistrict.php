<?php require_once("../ajout/ongbase.php");

$rel="SELECT * FROM region AS reg, district AS dist, commune AS comm, site AS sit , activite As act , femmes_enceintes As fem , naissance As nais, enf_0a5 As e0a5,enf_6a11 AS e6a11,enf_12a23 AS e12a23 WHERE reg.nomregion=dist.coderegion AND dist.nomdistrict=comm.codedistrict AND comm.nomcommune=sit.codecommune AND sit.nomsite=act.codesite AND sit.nomsite=fem.code_site AND sit.nomsite=nais.code_site AND sit.nomsite=e0a5.code_site AND sit.nomsite=e6a11.code_site AND sit.nomsite=e12a23.code_site GROUP BY dateactivite";
$re=$pdo->prepare($rel);
$re->execute();

;?>