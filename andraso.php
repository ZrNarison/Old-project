<?php require_once("../ajout/ongbase.php");require_once("../ajout/asa.php"); ?>
<!DOCTYPE html>
  <html>
  <head> 
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/> 
    <title>JOURNAL PAR DISTRICT</title>
  </head>
  <body>
    <div class="">
      <div class="col-sx-12 navbar navbar-inverse"><?php require("../complement/entete2.php") ?></div>
      <div class="col-sm-4 col-md-12">
        <div class="container row">
          <div class="container spacer  col-md-offset-0 col-sm-5 col-md-7">
            <div class="panel-body">
              <?php while($q=$re->fetch()) {;?>
                <div class="form-group">
                  <select>
                    <option value="" disabled Selected>Séléctionnez une de Région</option>
                    <?php /*while($q=$re->fetch()) {*/echo "<option value='".($q['nomregion'])."'>".utf8_encode($q['nomregion'])."</option>" ;?>
                  </select>
                </div>
                <div class="form-group">
                  <select>
                    <option value="" disabled Selected>Séléctionnez une de District</option>
                      <?php $dq($q);echo "<option value='".($dq['NOMDISTRICT'])."'>".utf8_encode($q['NOMDISTRICT'])."</option>" ;?>
                  </select> 
                </div>
              <?php };?>
                <div class="btn-block">
                  <input type="submit" name="s" value="filtre">
                </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-5">
            <div class="panel panel-info">
              <div class="panel-heading">
                <?php require("../complement/pub.jsx");?>
                <div class="col-sx-4 jumbotron">
                  <?php require'../complement/carte.jsx';?>
                </div>
              </div>          
            </div>
          </div>
        <div class="col-sm-4 col-md-12">
          <div class="panel-form">
          </div>
        </div-->
      </div>        
      </div>
    </div>
  </div>
</body>
</html>
