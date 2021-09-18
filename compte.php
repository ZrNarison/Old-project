<!DOCTYPE html>
  <html>
  <head> 
  <meta charset="utf-8" lang="fr"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/verif.js"></script>
	<script type="text/javascript" src="js/jquery-validate.js"></script>
<title>SECURITY</title>
  </head>
  <body>    
  <div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php");?></div>
    <div class="container spacer col-md-5 col-xs-12 col-md-offset-3">
      <div class="card">
        <div class="panel-primary bg-info"><h3 class="text-center">MODIFICATION COMPTE</h3> </div>        
        <form class="form-inline " style="margin-top: 10px">
          <a href="nouveau_compte.php" id="nouveau_compte"  class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 75%">Créer compte</a>          
        </form>
        <!--form class="form-inline" style="margin-top: 10px">          
        </form-->
        <div class="panel-primary col-md-7">
			    <form method="POST" action="ajout/editcompte.php"  enctype="multipart/form-data" id="editcopmte">
            <div class="form-group">
              <label class="control-label">UTILISATEUR</label>       
                <select name="edituser" id="mod" class="form-control text-center"><option value="" disabled selected>--Un utilisateur--</option>
                  <?php require_once("ajout/ongbase.php");$liste="SELECT  * FROM compte ORDER BY fonction";$li=$pdo->prepare($liste);$li->execute();while($et=$li->fetch()) {;echo "<option value='".($et['user'])."'>".utf8_encode($et['user'])/*($et['CODECOMMUNE'])*/."</option>" ;};?> 
                </select>
            </div>
            <div class="form-group">
              <label class="control-label">ANCIEN MOT DE PASS :</label>
              <input type="password"  name="ancien" id="pass" class="form-control text-center" placeholder="Ancien mot de pass"/>
            </div>
            <div class="form-group">
              <label class="control-label">NOUVEAU UTILISATEUR :</label>
              <input type="text"  name="new_user" id="new_useruser" class="form-control text-center" placeholder="Nouveau utilisateur"/>
            </div>
            <div class="form-group">
              <label class="control-label">NOUVEAU MOT DE PASS :</label>
              <input type="password"  name="new" id="newpass" class="form-control text-center" placeholder="Nouveau mot de pass"/>
            </div>
            <div class="form-group ">
              <label class="control-label">CONFIRMATION DU NOUVEAU :</label>
              <input type="password" name="confirm" id="pass" class="form-control text-center" placeholder="Veuillez confirmé SVP !">
            </div>
            <div class="btn-block mr-sm-2">                       
              <button  id="btn-site" class="btn btn-success">ENREGISTRER</button>
              <!--a href="../ajout/del_compte.php" id="nouveau_compte"  class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="margin-left:24%">Supprimer </a-->
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>              
  </body>
  </html>
