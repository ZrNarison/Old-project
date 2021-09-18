<?php require_once("../ajout/ongbase.php");?>
<!DOCTYPE html>
  <html>
  <head> 
  <meta charset="utf-8" lang="fr"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/verif.js"></script>
	<script type="text/javascript" src="js/jquery-validate.js"></script>
	<title>ACTIVITE PNNC</title>
</head>
<body>
<div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
      <div class="container spacer col-md-5 col-xs-12 col-md-offset-3">
        <div class="card">
          <div class="panel-primary bg-info"><h3 class="text-center">NOUVEAU SITE PROVINCE PNNC</h3> </div>
            <div class="panel-primary col-md-7">
              <form method="POST" action="../ajout/ajoutprovince.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">CODE :</label>
                  <input type="text" id="provin" name="code" style="width: 135px;" placeholder="Code Province" class="form-control text-center" required>
                </div>
                <div class="form-group">
                  <label class="control-label">NOM :</label>
                  <input type="text" id="provin" name="provin" placeholder="Nom du nouveau Province" class="form-control text-center" required>
                </div>
                <div class="form-group">
                  <label class="control-label">PHOTO PROVINCE :</label>
                  <input type="file" name="photo_province" id="photoprovince" required/>
                </div>
                <div class="btn-block">
                  <button  id="btn-site" class="btn btn-success">ENREGISTRER</button>
                </div>
              </form>
            </div>
        </div>
      </div>
  </body>
  </html>