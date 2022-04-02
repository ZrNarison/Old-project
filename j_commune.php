<?php require_once("ajout/rq_act.php");
    
    $reg="SELECT * FROM district";
    $re=$pdo->prepare($reg);
    $re->execute();

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
  <div class="col-md-12"><!--?php //require("ajout/tete.php") ?-->
    <div class="panel-form">
      <label class="control-label">COMMUNE:</label>
        <select>
          <option value="" disabled Selected>Séléctionnez une de Région</option><?php while($q=$re->fetch()) {;echo "<option value='".($q['nomdistrict'])."'>".utf8_encode($q['nomdistrict'])."</option>" ;};?>
        </select>
          <input type="submit" name="s" value="filtre">
            <table class="table">                  
              <thead class="col-md-5">
                <tr>
                  <th>District</th>
                  <th>Commune</th>
                  <th>Site</th>
                  <th>Date d'activité</th>
                  <th>Opérationnel/Fonctionnel</th>
                  <th>Ayant rapport</th>
                  <th>Taux de rapportage</th>
                  <th>Femme Enceinte Récensées</th>
                  <th>Femme Enceinte Réferé CPN</th>
                  <th>Taux de suivi CPN</th>
                  <th>Femme Enceinte Réferé CPN</th>
                  <th>Taux de participation EN</th>
                  <th>Accouchement sous assistant médicale</th>
                  <th>Taux Accouchement sous assistant médicale</th>
                  <th>Nouveau nés récensé</th>
                  <th>Nouveau nés vivant</th>
                </tr>
              </thead><?php while ($v=$rq->fetch()) {;?> 
              <tbody>
                <td><?php echo($v["nomdistrict"]); ?></td>
                <td><?php echo($v["nomcommune"]); ?></td>
                <td><?php echo($v["nomsite"]); ?></td>
                <td><?php echo($v["dateactivite"]); ?></td>
                <td><?php $k=($v["oper_fonc"]);echo($k); ?></td>
                <td><?php $ar=($v["ayantrapport"]);echo($ar) ?></td>
                <td><?php $tr=(($ar*100)/$k);echo($tr),"%"; ?></td>
                <td><?php $fer=($v["FMENCEINTE_RECENSE"]);echo($fer);?></td>
                <td><?php $fec=($v["FMENCEINTE_CPN"]);echo($fec);?></td>
                <td><?php $ftc=(($fec*100)/$fer);echo($ftc),"%";?></td>
                <td><?php $fee=($v["FMENCEINTE_EN"]);echo($fee);?></td>
                <td><?php $ftc=(($fee*100)/$fer);echo($ftc),"%";?></td>
                <td><?php $fem=($v["FMENCEINTE_ACCOUC_MEDI"]);echo($fem);?></td>
                <td><?php $fam=(($fem*100)/$fer);echo($fam),"%";?></td>
                <td><?php $nvr=($v["NAISSANCE_NOUV_NAIS_RECENSE"]);echo($nvr);?></td>
                <td><?php $nvv=($v["NAISSANCE_NAIS_VIV"]);echo($nvv);?></td> 
              </tbody>
                        
                        
                      </div>
                      <div>
                        
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
                      <div class="">
                        <th>Enfant de 0 a 23 mois récensé</th><td><?php $e0a23rcs=($e0a5rcs+$e6a11rcs+$e12a23rcs);echo($e0a23rcs);?></td>
                      </div>>
                      <div>
                        <th>Enfant de 0 a 5 mois pésés</th><td><?php $e0a5pss=($v["ENF_0a5_PS_Z1"]);echo($e0a5pss);?></td>
                      </div>
                      <div>
                        <th>Enfant de 6 a 11 mois pésés</th><td><?php $e6a11pss=($v["ENF_6a11_PS_Z1"]);echo($e6a11pss);?></td>
                      </div>
                      <div class="">
                        <th>Enfant de 12 a 23 mois pésés</th><td><?php $e12a23pss=($v["ENF_12a23_PS_Z1"]);echo($e12a23pss);?></td>
                      </div>
                      <div class="">
                        <th>Enfant de 0 a 23 mois pésés</th><td><?php $e0a23pss=($e0a5pss+$e6a11pss+$e12a23pss);echo($e0a23pss);?></td>
                      </div>>
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
