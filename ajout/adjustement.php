<?php $req="SELECT * FROM  DISTRICT As dtr, COMMUNE As cmn, SITE As ste, ACTIVITE As act WHERE dtr.nomdistrict=cmn.codedistrict AND cmn.nomcommune=ste.codecommune AND ste.nomsite=act.codesite";
    $rq=$pdo->prepare($req);
    $rq->execute();?>