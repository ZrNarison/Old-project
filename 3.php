<?php require_once("./ajout/ongbase.php");

    $site="SELECT * FROM site";
    $sit=$pdo->prepare($site);
    $sit->execute();

    if (!isset($_GET["code_site"])) 
        {        
          $activ="SELECT * FROM site AS st,enf_0a5 As e0a5,enf_6a11 AS e6a11, enf_12a23 As e12a23, enf_24a59 As e24a59 WHERE st.nomsite=e0a5.code_site AND st.nomsite=e6a11.code_site AND st.nomsite=e12a23.code_site AND st.nomsite=e24a59.code_site GROUP BY e0a5.dateact AND e6a11.dateact AND e12a23.dateact AND e24a59.dateact";
          $act=$pdo->prepare($activ);
          $act->execute() ;           
        }
        else
        { 
          $f =$_GET['codesite'];
          $activ="SELECT * FROM site AS st,enf_0a5 As e0a5,enf_6a11 AS e6a11, enf_12a23 As e12a23, enf_24a59 As e24a59 WHERE st.nomsite=e0a5.code_site AND st.nomsite=e6a11.code_site AND st.nomsite=e12a23.code_site AND st.nomsite=e24a59.code_site GROUP BY e0a5.dateact AND e6a11.dateact AND e12a23.dateact AND e24a59.dateact WHERE code_site='".$f."'";
          $act=$pdo->prepare($activ);
          $act->execute() ;   
        }
  ?>
<!DOCTYPE html>
  <html>
  <head> 
        <meta charset="utf-8" lang="fr">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
        <title>JOURNAL ACTIVITE PNNC</title>
  </head>
  <body>    
  <div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
<div class="container spacer col-sm-12 col-xs-49 col-md-offset-1">
  <div class="card">
    <?php while($et=$sit->fetch()) {; ?>
      <form> 
    <div class="panel-primary bg-info text-center"><h3>RAPPORT D'ACTIVITE PNCC :<em>Enfants 0 a 59 mois</em></h3><select name="nregion" class="text-center"><option alue="00" disabled selected>Séléctionner un site</option><?php echo "<option value='".($et['nomsite'])."'>".utf8_encode($et['nomsite'])."</option>" ;?></select><button  id="btn-filtre" class="btn btn-success">filtre</button></div> 
    <div class="container row">
      <div class="col-sm-2,1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <img src="../img/<?php  $im=($et['photosite']);echo($im) ;?>" width="234px" height="350px" alt="IMAGE SITE">
          </div>
        </div>
      </div>
    <?php  };?>
      <div class="panel-body ">
        <table class="table">
          <?php while ($r=$act->fetch()) {;?>
          <thead class="text-center ">
              <th id="primo"> 0 a 5 mois
                 <tr>
                  <thead>
                    <th>Récensées</th>
                    <th>Pésés (Z-1)</th>
                    <th>Pésés (Z-2)</th>
                    <th>Pésés (Z-3)</th>
                  </thead>                   
                </tr>
                <tbody>
                  <tr>
                    <td><?php echo ($r["recenses0a5"]);?></td>
                    <td><?php echo ($r["pesesZ1_0a5"]);?></td>
                    <td><?php echo ($r["pesesZ2_0a5"]);?></td>
                    <td><?php echo ($r["pesesZ3_0a5"]);?></td>
                  </tr>
                </tbody>
              </th>
              <th id="second"> 6 a 11 mois
                 <tr>
                  <thead>
                    <th>Récensées</th>
                    <th>Pésés (Z-1)</th>
                    <th>Pésés (Z-2)</th>
                    <th>Pésés (Z-3)</th>
                  </thead>                   
                </tr>
                <tbody>
                  <tr>
                    <td><?php echo ($r["recenses0a5"]);?></td>
                    <td><?php echo ($r["pesesZ1_6a11"]);?></td>
                    <td><?php echo ($r["pesesZ2_6a11"]);?></td>
                    <td><?php echo ($r["pesesZ3_6a11"]);?></td>
                  </tr>
                </tbody>
              </th>
              <th id="trio"> 12 a 23 mois
                 <tr>
                  <thead>
                    <th>Récensées</th>
                    <th>Pésés (Z-1)</th>
                    <th>Pésés (Z-2)</th>
                    <th>Pésés (Z-3)</th>
                  </thead>                   
                </tr>
                <tbody>
                  <tr>
                    <td><?php echo ($r["recenses0a5"]);?></td>
                    <td><?php echo ($r["pesesZ1_0a5"]);?></td>
                    <td><?php echo ($r["pesesZ2_0a5"]);?></td>
                    <td><?php echo ($r["pesesZ3_0a5"]);?></td>
                  </tr>
                </tbody>
              </th>
              <th id="quadro"> 24 a 59 mois
                 <tr>
                  <thead>
                    <th>Récensées</th>
                    <th>Pésés (Z-1)</th>
                    <th>Pésés (Z-2)</th>
                    <th>Pésés (Z-3)</th>
                  </thead>                   
                </tr>
                <tbody>
                  <tr>
                    <td><?php echo ($r["recenses0a5"]);?></td>
                    <td><?php echo ($r["pesesZ1_6a11"]);?></td>
                    <td><?php echo ($r["pesesZ2_6a11"]);?></td>
                    <td><?php echo ($r["pesesZ3_6a11"]);?></td>
                  </tr>
                </tbody>
              </th>                           
          </thead>
        <?php } ;?>
        </table>
      </div>
    </form>
</body>
<style type="text/css">
  #primo,#second,#trio,#quadro{float: left;}
</style>
</html>