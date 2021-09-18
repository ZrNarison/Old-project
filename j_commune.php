<?php require_once("ongbase.php");
    
    /*$si="SELECT * FROM commune ORDER BY codedistrict";
    $st=$pdo->prepare($si);
    $st->execute();

    $comm="SELECT * FROM district ORDER BY coderegion";
    $com=$pdo->prepare($comm);
    $com->execute();

    $rq="SELECT * FROM REGION ";
    $nm=$pdo->prepare($rq);
    $nm->execute();

    $dis="SELECT *  FROM region ORDER BY codeprovince";
    $di=$pdo->prepare($dis);
    $di->execute();*/
    
    $reg="SELECT * FROM district";
    $re=$pdo->prepare($reg);
    $re->execute();

    $req="SELECT * FROM  DISTRICT As dtr, COMMUNE As cmn, SITE As ste, ACTIVITE As act WHERE dtr.nomdistrict=cmn.codedistrict AND cmn.nomcommune=ste.codecommune AND ste.nomsite=act.codesite";
    $rq=$pdo->prepare($req);
    $rq->execute();
  ?>
<!DOCTYPE html>
  <html>
  <head> 
    <meta charset="utf-8" lang="fr"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/verif.js"></script>
    <script type="text/javascript" src="js/jquery-validate.js"></script>
    <title>JOURNAL SITE</title>
</head>
<body>
<div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
    <div class="container row">
      <div class="col-sm-3 col-md-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <?php require("pub.jsx");?>
          </div>
        </div>
      </div>
      <div class="col-md-8"><?php require("tete.php") ?>
        <div class="panel-form">
          <label class="control-label">COMMUNE:</label>
          <select>
            <option value="" disabled Selected>Séléctionnez une de Région</option>
            <?php while($q=$re->fetch()) {;echo "<option value='".($q['NOMDISTRICT'])."'>".utf8_encode($q['NOMDISTRICT'])."</option>" ;};?>
          </select> <input type="submit" name="s" value="filtre">
                <table class="table"><?php while ($v=$rq->fetch()) {;?>                   
                  <thead>
                    <tr>
                      <th>District</th><th>Commune</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td><?php echo($v["NOMDISTRICT"]); ?></td><td><?php echo($v["NOMCOMMUNE"]); ?></td>
                  </tbody>
                    </td>
                      <div>
                        
                      </div>
                      <div>
                        <th>Lieu du site</th><td><?php echo($v["NOMSITE"]); ?></td>
                      </div>
                      <div>
                        <th>Date d'activité</th><td><?php echo($v["dateactivite"]); ?></td>
                      </div>
                      <div>
                        <th>Opérationnel/Fonctionnel</th><td><?php $k=($v["OPER_FONC"]);echo($k); ?></td>
                      </div>
                      <div>
                        <th>Ayant rapport</th><td><?php $ar=($v["AYANTRAPPORT"]);echo($ar) ?></td>
                      </div>
                      <div>
                        <th>Taux de rapportage</th><td><?php $tr=(($ar*100)/$k);echo($tr),"%"; ?></td>
                      </div>
                      <div>
                        <th>Femme Enceinte Récensées</th><td><?php $fer=($v["FMENCEINTE_RECENSE"]);echo($fer);?></td>
                      </div>
                      <div>
                        <th>Femme Enceinte Réferé CPN</th><td><?php $fec=($v["FMENCEINTE_CPN"]);echo($fec);?></td>
                      </div>
                      <div>
                        <th>Taux de suivi CPN</th><td><?php $ftc=(($fec*100)/$fer);echo($ftc),"%";?></td> 
                      </div>
                      <div>
                        <th>Femme Enceinte Réferé CPN</th><td><?php $fee=($v["FMENCEINTE_EN"]);echo($fee);?></td>
                      </div>                      
                      <div>
                        <th>Taux de participation EN</th><td><?php $ftc=(($fee*100)/$fer);echo($ftc),"%";?></td>
                      </div>
                      <div>
                        <th>Accouchement sous assistant médicale</th><td><?php $fem=($v["FMENCEINTE_ACCOUC_MEDI"]);echo($fem);?></td>
                      </div>
                      <div>
                        <th>Taux Accouchement sous assistant médicale</th><td><?php $fam=(($fem*100)/$fer);echo($fam),"%";?></td>
                      </div>
                      <div>
                        <th>Nouveau nés récensé</th><td><?php $nvr=($v["NAISSANCE_NOUV_NAIS_RECENSE"]);echo($nvr);?></td>
                      </div>
                      <div>
                        <th>Nouveau nés vivant</th><td><?php $nvv=($v["NAISSANCE_NAIS_VIV"]);echo($nvv);?></td>
                      </div>
                      <div>
                        <th>Proportion nouveau nés vivants</th><td><?php $pnvv=(($nvv*100)/$nvr);echo($pnvv),"%";?></td>
                      </div>
                      <div>
                        <th>Mort en naissance</th><td><?php $nvm=($v["NAISSANCE_MORT_NAIS"]);echo($nvm);?></td>
                      </div>
                      <div>
                        <th>Proportion mort en naissance</th><td><?php $pmn=(($nvm*100)/$nvr);echo($pmn),"%";?></td>
                      </div>
                      <div>
                        <th>Poids naissance moins 2,5Kg</th><td><?php $pnm=($v["NAISSANCE_PDS_MOINS"]);echo($pnm);?></td>
                      </div>
                      <div>
                        <th>Proportion insuffisante de poids</th><td><?php $pim=(($pnm*100)/$nvr);echo($pim),"%";?></td>
                      </div>
                      <div>
                        <th>Taille naissance moins 46cm</th><td><?php $tnm=($v["NAISSANCE_TAILLE_NAIS_MOINS"]);echo($tnm);?></td>
                      </div>
                      <div>
                        <th>Proportion insuffisante de taille</th><td><?php $pit=(($tnm*100)/$nvr);echo($pit),"%";?></td>
                      </div>
                      <div>
                        <th>Enfant de 0 a 5 mois récensé</th><td><?php $e0a5rcs=($v["ENF_0a5_RCS"]);echo($e0a5rcs);?></td>
                      </div>
                      <div>
                        <th>Enfant de 6 a 11 mois récensé</th><td><?php $e6a11rcs=($v["ENF_6a11_RCS"]);echo($e6a11rcs);?></td>
                      </div>
                      <div class="">
                        <th>Enfant de 12 a 23 mois récensé</th><td><?php $e12a23rcs=($v["ENF_12a23_RCS"]);echo($e12a23rcs);?></td>
                      </div>
                      <!--<div class="">
                        <th>Enfant de 0 a 23 mois récensé</th><td><?php $e0a23rcs=($e0a5rcs+$e6a11rcs+$e12a23rcs);echo($e0a23rcs);?></td>
                      </div>-->
                      <div>
                        <th>Enfant de 0 a 5 mois pésés</th><td><?php $e0a5pss=($v["ENF_0a5_PS_Z1"]);echo($e0a5pss);?></td>
                      </div>
                      <div>
                        <th>Enfant de 6 a 11 mois pésés</th><td><?php $e6a11pss=($v["ENF_6a11_PS_Z1"]);echo($e6a11pss);?></td>
                      </div>
                      <div class="">
                        <th>Enfant de 12 a 23 mois pésés</th><td><?php $e12a23pss=($v["ENF_12a23_PS_Z1"]);echo($e12a23pss);?></td>
                      </div>
                      <!--<div class="">
                        <th>Enfant de 0 a 23 mois pésés</th><td><?php $e0a23pss=($e0a5pss+$e6a11pss+$e12a23pss);echo($e0a23pss);?></td>
                      </div>-->
                      <div class="">
                        <th>Taux de couverture enfant 0 a 5 mois</th><td><?php $te0a5rcs=($e0a5rcs);$te0a5pss=($e0a5pss);echo(($te0a5pss*100)/$te0a5rcs),"%";?></td>
                      </div>
                      <div class="">
                        <th>Taux de couverture enfant 6 a 11 mois</th><td><?php $te6a11rcs=($e6a11rcs);$te6a11pss=($e6a11pss);echo(($te6a11pss*100)/$te6a11rcs),"%";?></td>
                      </div>
                      <div class="">
                        <th>Taux de couverture enfant 12 a 23 mois</th><td><?php $te12a23rcs=($e12a23rcs);$te12a23pss=($e12a23pss);echo(($te12a23pss*100)/$te12a23rcs),"%";?></td>
                      </div>
                      <div class="">
                        <th>Taux de couverture enfant 0 a 23 mois</th><td><?php $te0a23rcs=($e0a5rcs+$e6a11rcs+$e12a23rcs);$te0a23pss=($e0a5pss+$e6a11pss+$e12a23pss);echo(($te0a23pss*100)/$te0a23rcs),"%";?></td>
                      </div>
                      <div>
                        <th>Enfant de 24 a 59 mois récensé</th><td><?php $e24a59rcs=($v["ENF_24a59_RCS"]);echo($e24a59rcs);?></td>
                      </div>                      
                    </tr>
                  </thead>
                <?php  };?>
        </div>
    </div>

  </body>
  </html>
