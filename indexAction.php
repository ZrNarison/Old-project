<?php require_once("../ajout/ongbase.php");

    $site="SELECT * FROM site";
    $sit=$pdo->prepare($site);
    $sit->execute();

    if (!isset($_GET["codesite"]))
        {
          $activ="SELECT * FROM activite GROUP BY dateactivite";
          $act=$pdo->prepare($activ);
          $act->execute() ;
        }
        else
        {
          $f =$_GET['codesite'];
          $activ="SELECT * FROM activite GROUP BY dateactivite WHERE codesite='".$f."'";
          $act=$pdo->prepare($activ);
          $act->execute() ;
        }
  ?>
<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../js/app.js"></script>
	<script type="text/javascript" src="../js/jquery-validate.js"></script>
  <title>JOURNAL ACTIVITE PNNC</title>
  </head>
  <body>
  <div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("../complement/entete2.php") ?></div>
<div class="container spacer col-sm-12 col-xs-49 col-md-offset-1">
  <div class="card">
  <h3>RAPPORT D'ACTIVITE PNCC :<em>Repportage</em></h3>  
    <!--?php while($et=$sit->fetch()) {; ?><div class="panel-primary bg-info text-center">
      <!-form>
        <select name="site" class="text-center">
          <option alue="00" disabled selected>Séléctionner un site</option>
          <!-?php echo "<option value='".($et['nom_site'])."'>".utf8_encode($et['nom_site'])."</option>" ;?>
        </select><button  id="btn-filtre" class="btn btn-success">filtre</button>  
    </div>
    <div class="container row">
      <div class="col-sm-2,1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <img src="../img/fokotany/<!-?php $im=($et['photosite']);echo($im) ;?>" width="540px" height="550px" alt="IMAGE SITE">
          </div>
        </div>
      </div>
    <!-?php  };?>
      <div class="col-md-4">
      <div class="panel-body">
        <table class="table">
          <!-?php while ($r=$act->fetch()) {;?>
          <thead class="text-center">
            <tr>
              <th>Opérationnel et Fonctionnel</th>
              <th>Ayant rapport</th>
              <th>Date d'action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td><!-?php echo ($r["oper_fonc"]); ?></td>
              <td><!-?php echo ($r["ayantrapport"]); ?></td>
              <td><!-?php echo ($r["dateactivite"]); ?></td>
            </tr>
          </tbody>
        <!-?php } ;?-->
        </table>
      </div>
    </div>
    </form>
</body>
</html>