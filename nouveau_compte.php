<!DOCTYPE html>
  <html>
  <head> 
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
        <div class="panel-primary bg-info"><h3 class="text-center">NOUVEAU COMPTE</h3> </div>
        <form class="form-inline " style="margin-top: 10px">
          <a href="compte.php" id="edit_compte"  class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 75%">Edit compte</a>
        </form>
        <div class="panel-primary col-md-10">
          <form method="POST" action="ajout/ajoutcompte.php"  enctype="enctype/form-data" id="addcompte">
            <div class="form-group">
              <label class="control-label">UTILISATEUR</label>
                <input type="text" name="compteuser" class="form-control text-center" placeholder="Nom d'utilisateur">
            </div>
            <div class="form-group">
              <label class="control-label">FONCTION</label>
                <select name="fonction" id="mod" class="form-control text-center">
                <option value="" disabled selected>--Une fonction--</option>
                <?php
                        require_once("ajout/ongbase.php");
                        $reqfonction="SELECT * FROM fonction";
                        $reqfo=$pdo->prepare($reqfonction);
                        $reqfo->execute();
                        while($reqf=$reqfo->fetch()) {;echo "<option value='".($reqf['fonct'])."'>".utf8_encode($reqf['fonct'])."</option>"; };
                        ;?>
                </select>
            </div>
            <div class="form-group">
              <label class="control-label">LIEU</label>
              <select name="lieu" id="mod" class="form-control text-center"><option value="" disabled selected>--lieu--</option>
                  <?php
                        require_once("ajout/ongbase.php");
                        $lieu="SELECT * FROM region ORDER BY code_province/*As prov, region As reg,district As distr, commune AS comm WHERE prov.nom_province=reg.code_province AND reg.nom_region=distr.code_region AND distr.nom_district=comm.code_district ORDER BY nom_commune */";
                        $req=$pdo->prepare($lieu);
                        $req->execute();
                        while($reqlieu=$req->fetch()) {;echo "<option value='".($reqlieu['nom_region'])."'>".utf8_encode($reqlieu['nom_region'])."</option>"; };
                        ;?>
                </select>
            </div>
            <div class="form-group">
              <label class="control-label">MOT DE PASS :</label>
              <input type="password"  name="nouveau" id="newpass" class="form-control text-center" placeholder="Entrer votre mot de pass"/>
            </div>
            <div class="form-group">
              <label class="control-label">CONFIRMATION :</label>
              <input type="password" name="confirm" id="pass" class="form-control text-center" placeholder="Veuillez confirmé SVP !">
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
