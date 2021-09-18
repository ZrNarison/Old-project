<?php require_once("ongbase.php");
    
    $si="SELECT * FROM commune ORDER BY codedistrict";
    $st=$pdo->prepare($si);
    $st->execute();

    $comm="SELECT * FROM district ORDER BY coderegion";
    $com=$pdo->prepare($comm);
    $com->execute();
    
    $dis="SELECT *  FROM region ORDER BY codeprovince";
    $di=$pdo->prepare($dis);
    $di->execute();
    
    $reg="SELECT * FROM PROVINCE";
    $re=$pdo->prepare($reg);
    $re->execute();
  ?>
<!DOCTYPE html>
  <html>
  <head> 
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/style.min.css"/> 
    <title>AJOUT DE NOUVEAU SITE</title>
  </head>
  <body>
    <div>
      <div class="headding"><?php require("tete.php"); ?></div>    
        <div class="container">
          <form method="POST" action="asite.php">
            <div class="panel-body">
              <div class="body-panel-body">
                <div>
                  <label class="control-label">PROVINCE</label><br>
                  <input type="text" name="pp" size="27" placeholder="Entrer le nom du nouveau Province">
                </div>
                <!--<div>
                  <label class="control-label">CODE PROVINCE</label><br>
                  <select name="co_province" id="mod">
                    <option value="" disabled selected>Séléctionner une province</option> 
                      <?php while($q=$re->fetch()) {;echo "<option value='".($q['nomPROVINCE'])."'>".utf8_encode($q['nomprovince'])."</option>" ;};?> 
                  </select><br>
                  <label class="control-label">NOM DU REGION</label><br>
                  <input type="text" name="n_region" size="27" placeholder="Entrer le nom du nouveau region"/>
                </div>
                <div>
                  <label class="control-label">CODE REGION</label><br>
                  <select name="c_region">
                    <option value="" disabled selected>Séléctionner région</option> 
                      <?php while($b=$di->fetch()) {;echo "<option value='".($b['nomregion'])."'>".utf8_encode($b['nomregion'])."</option>" ;};?>
                  </select><br>
                  <label class="control-label">NOM DISTRICT</label><br>
                  <input type="text" name="n_district" size="27" placeholder="Entrer le nom du nouveu district">
                </div>
                <div>
                  <label class="control-label">CODE DISTRICT</label><br>
                  <select name="c_district">
                    <option value="" disabled selected>Séléctionner district</option> 
                      <?php while($c=$com->fetch()) {;echo "<option value='".($c['idDISTRICT'])."'>".utf8_encode($c['idDISTRICT'])."</option>" ;};?>
                  </select><br>
                  <label class="control-label">NOM COMMUNE</label><br>
                  <input type="text" name="n_commune" size="27" placeholder="Entrer le nom du nouveu commune">
                </div>
                <div>
                  <label class="control-label">CODE COMMUNE</label><br>
                  <select name="c_commune">
                    <option value="" disabled selected>Séléctionner commune</option> 
                      <?php while($m=$st->fetch()) {;echo "<option value='".($m['idCOMMUNE'])."'>".utf8_encode($m['idCOMMUNE'])."</option>" ;};?>
                  </select><br>
                  <label class="control-label">NOM SITE</label><br>
                  <input type="text" name="n_sitee" size="27" placeholder="Entrer le nom du nouveu site">
                </div>-->
                <div>
                  <button class="btn">ENREGISTRER</button>
                </div>
              </div>
            </div>
          </form>
        </div>
       </div>
    </div>       
  </body>
  </html>
