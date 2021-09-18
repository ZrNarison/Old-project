<?php require_once("../ajout/ongbase.php");
        $reg="SELECT * FROM region ORDER BY province";
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
<div class="container spacer col-sm-12 col-xs-49 col-md-offset-1">
  <div class="card">
    <div class="panel-primary bg-info text-center">
      <h3>RAPPORT D'ACTIVITE PNCC :<em>Par Région</em></h3>
      <form>
        <select name="nregion" class="text-center">
          <option alue="00" disabled selected>Séléctionner une Région</option>
          <?php while($et=$re->fetch()) {;echo "<option value='".($et['nomregion'])."'>".utf8_encode($et['nomregion'])."</option>" ;};?>
        </select><button  id="btn-site" class="btn btn-success">filtre</button>  
    </div>    
    <?php require_once("../ajout/journalregion.php");while ($r=$re->fetch()) {;?>
    <div class="container row">
      <div class="col-sm-2,1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <img src="../img/<?php $im=($r['photoregion']);echo($im) ;?>" width="234px" height="350px" alt="IMAGE REGION">
          </div>
        </div>
      </div>
      <div class="col-md-3">
      <div class="panel-body">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th>Répportage</th>
              <th>Suivi CPN</th>
              <th>Participation à l'EN</th>
              <th>Accouchement sous assistant médicale</th>
              <th>Insuffisance de poids de naissance</th>
              <th>Insuffisance de taille de naissance</th>
              <th>Déces à la naissance</th>
              <th>Enfant 0 - 5 mois</th>
              <th>Enfant 6 -11 mois</th>
              <th>Enfant 12-23 mois</th>
              <th>Date d'avtivité</th>
            </tr>            
          </thead>          
          <tbody class="text-center">
            <tr>
              <td><?php $ao=(($r['ayantrapport']*100)/($r['oper_fonc']));echo round($ao,2),"%";?></td>
              <td><?php $fe=(($r['refere_cpn']*100)/($r['recence']));echo round($fe,2),"%";?></td>
              <td><?php $pr=(($r['participant_en']*100)/($r['recence']));echo round($pr,2),"%";?></td>
              <td><?php $ar=(($r['accouchement_med']*100)/($r['recence']));echo round($ar,2),"%";?></td>
              <td><?php $npr=(($r['poids']*100)/($r['recences']));echo round($npr,2),"%";?></td>
              <td><?php $ntr=(($r['taille']*100)/($r['recences']));echo round($ntr,2),"%";?></td>
              <td><?php $nmr=(($r['morts_nes']*100)/($r['recences']));echo round($nmr,2),"%";?></td>
              <td><?php $res0a5=($r['recenses0a5']+$r['recenses6a11']+$r['recenses12a23']);echo round($r['recenses0a5']*100/$res0a5,2),"%";?></td>
              <td><?php $res6a11=($r['recenses0a5']+$r['recenses6a11']+$r['recenses12a23']);echo round($r['recenses6a11']*100/$res6a11,2),"%";?></td>
              <td><?php $res12a23=($r['recenses0a5']+$r['recenses6a11']+$r['recenses12a23']);echo round($r['recenses12a23']*100/$res12a23,2),"%";?></td>
              <td><?php $dat=($r['dateactivite']);echo ($dat);?></td>
            </tr>
          </tbody>
        <?php } ;?>
        </table>
      </div>
    </div>
    </form>
</body>
</html>