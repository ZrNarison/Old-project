<!DOCTYPE html>
  <html>
  <head>
    <?php require_once("ajout/ongbase.php");
          $site="SELECT * FROM commune ORDER BY code_district";
          $sit=$pdo->prepare($site);
          $sit->execute();
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
          <div class="panel-primary bg-info"><h3 class="text-center">NOUVEAU SITE QUARTIER PNNC</h3> </div>
            <div class="panel-primary col-md-7">
			         <form method="POST" action="ajout/ajoutsite.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">COMMUNE :</label>
                  <select name="codecommune" id="codecommune" class="text-center" required>
                    <option value=""size="92" disabled selected>Séléctionner une commune</option>
                    <?php while($ste=$sit->fetch()) {;echo "<option value='".($ste['id_commune'])."'>".utf8_encode($ste['nomcommune'])."</option>" ;};?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">CODE :</label>
                  <input type="text" name="code" id="site" placeholder="Code du nouveau SITE PNNC" class="form-control text-center" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">NOM  :</label>
                  <input type="text" name="site" id="site" placeholder="Nom du nouveau SITE PNNC" class="form-control text-center" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">PHOTO DU QUARTIER :</label>
                  <input type="file" name="photosite" id="photosite" required/>
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
