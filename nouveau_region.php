<!DOCTYPE html>
  <html>
  <head> 
    <?php require_once("../ajout/ongbase.php");
          /* $site="SELECT DISTINCT nomcommune FROM commune ORDER BY codedistrict";
          $sit=$pdo->prepare($site);
          $sit->execute();

          $comm="SELECT DISTINCT nomdistrict FROM DISTRICT ORDER BY coderegion";
          $com=$pdo->prepare($comm);
          $com->execute();

          $reg="SELECT DISTINCT nomregion FROM region ORDER BY codeprovince";
          $ger=$pdo->prepare($reg);
          $ger->execute(); */
          $dis="SELECT *  FROM province";
          $di=$pdo->prepare($dis);
          $di->execute();
    ?>
    <meta charset="utf-8" lang="fr"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/verif.js"></script>
    <script type="text/javascript" src="js/jquery-validate.js"></script>
    <title>SITE PNNC</title>
</head>
<body>
<div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
      <div class="container spacer col-md-5 col-xs-12 col-md-offset-3">
        <div class="card">
          <div class="panel-primary bg-info"><h3 class="text-center">NOUVEAU SITE REGIONALE PNNC</h3> </div>
            <div class="panel-primary col-md-7">
			         <form method="POST" action="../ajout/ajoutregion.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">NOM PROVINCE :</label>
                  <select name="codeprovince" id="code_province" class="text-center" required>
                    <option value=""size="92" disabled selected>Séléctionner une province</option>
                    <?php while($q=$di->fetch()) {;echo "<option value='".($q['code_province'])."'>".utf8_encode($q['nom_province'])."</option>";};?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">CODE :</label>
                  <input type="text" id="region" name="code" placeholder="Code du nouveau region" class="form-control text-center" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">NOM :</label>
                  <input type="text" id="region" name="region" placeholder="Entrer le nom du nouveau region" class="form-control text-center" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">PHOTO REGION :</label>
                  <input type="file" name="photoregion" id="photoregion" required/>
                </div>
                <div class="btn-block">
                  <button  id="btn-site" class="btn btn-success">ENREGISTRER</button>
                </div>
              </div>
            </div>
          </form>
      </div>
  </body>
  </html>
