<?php require_once("ongbase.php");
    $req="SELECT * FROM  DISTRICT As dtr, COMMUNE As cmn, SITE As ste, ACTIVITE As act ,WHERE dtr.id_district=cmn.code_district AND cmn.id_commune=ste.codecommune AND ste.nomsite=act.codesite";
    $rq=$pdo->prepare($req);
    $rq->execute();
  ?>