<!DOCTYPE html>
  <html>
  <head> 
    <?php require_once("../ajout/ongbase.php");
          $comm="SELECT * FROM DISTRICT ORDER BY code_region";
          $com=$pdo->prepare($comm);
          $com->execute();
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
          <div class="panel-primary bg-info"><h3 class="text-center">NOUVEAU SITE COMMUNALE PNNC</h3> </div>
            <div class="panel-primary col-md-7">
			         <form method="POST" action="../ajout/ajoutcommune.php"   enctype="multipart/form-data">
                <div class="form-group">
                  <label for="control-label">SITE COMMUNALE :</label>
                  <select name="codedistrict" id="codedistrict" class="text-center" required>
                    <option value="" disabled selected>Séléctionner une District</option>
                    <?php while($tri=$com->fetch()) {;echo "<option value='".($tri['code_district'])."'>".utf8_encode($tri['nom_district'])."</option>" ;};?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">CODE :</label>
                  <input type="text"  name="code" id="commune" placeholder="Entrer le nom du nouveau COMMUNE" class="form-control text-center" required />
                </div>
                <div class="form-group">
                  <label class="control-label">NOM COMMUNE :</label>
                  <input type="text"  name="commune" id="commune" placeholder="Entrer le nom du nouveau COMMUNE" class="form-control text-center" required />
                </div>
                <div class="form-group">
                  <label class="control-label">Photo Commune :</label>
                  <input type="file" name="photocommune" id="photocommune" required>
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
