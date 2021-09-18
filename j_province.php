<?php require_once("../ajout/ongbase.php");

    $reg="SELECT * FROM province";
    $re=$pdo->prepare($reg);
    $re->execute();

    $req="SELECT * FROM province /*As prv, REGION As rgn, DISTRICT As dtr, COMMUNE As cmn, SITE As ste, ACTIVITE As act WHERE prv.nomprovince=rgn.province AND rgn.nomregion=dtr.coderegion AND dtr.nomdistrict=cmn.codedistrict AND cmn.nomcommune=ste.codecommune AND ste.nomsite=act.codesite /*GROUP BY prv.province,rgn.province,dtr.nomregion,cmn.codedistrict,ste.codecommune,act.dateactivite*/";
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
      <div class="col-md-8">
        <div class="panel-form">
          <label class="control-label">PROVINCE:</label>
            <select class="text-center" id="province"><option  value="" disabled Selected>Séléctionnez une de Province</option>
            <?php while($q=$re->fetch()) {;echo "<option value='".($q['nomPROVINCE'])."'>".utf8_encode($q['nomprovince'])."</option>" ;};?>
          </select><input type="submit" name="s" value="filtre"/>
                <table class="table" id="nomprovince">
                  <thead class="headding-table">
                    <tr>
                      <th>Province</th>
                    </tr>
                  </thead>
                  <?php while ($v=$rq->fetch()) {;?>                   
                  <tbody>
                    <td class="" ><?php echo($v["nomprovince"]);?></br><img src="../img/<?php $im=($v['photoprovince']);echo($im) ;?>" width="234px" height="350px" alt="IMAGE SITE"></td>
                  </tbody>
                <?php  };?>
                </table>
        </div>
    </div>

  </body>
  </html>
