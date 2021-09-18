<!DOCTYPE html>
  <html>
  <head> 
    <?php require_once("../ajout/ongbase.php");
          $reg="SELECT * FROM region ORDER BY code_province";
          $ger=$pdo->prepare($reg);
          $ger->execute(); 
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
          <div class="panel-primary bg-info"><h3 class="text-center">NOUVEAU SITE DISTRICT PNNC</h3> </div>
            <div class="panel-primary col-md-7">
			         <form method="POST" action="../ajout/ajoutdistrict.php"  enctype="multipart/form-data">
                <div class="form-group">
                  <label for="control-label">REGION :</label>
                  <select name="coderegion" id="coderegion" class="text-center">
                    <option value="" disabled selected>Séléctionner une Région</option><?php while($cm=$ger->fetch()) {;echo "<option value='".($cm['code_region'])."'>".utf8_encode($cm['nom_region'])."</option>";};?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">CODE :</label>
                  <input type="text"  name="code" id="district" class="form-control text-center" placeholder="Code du nouveau DISTRICT"/>
                </div>
                <div class="form-group">
                  <label class="control-label">NOM :</label>
                  <input type="text"  name="district" id="district" class="form-control text-center" placeholder="Nom du nouveau DISTRICT"/>
                </div>
                <div class="form-group">
                  <label class="control-label">PHOTO DISTRICT :</label>
                  <input type="file" name="photo_district" id="photodistrict">
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
