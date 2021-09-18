<?php require_once("./ajout/ongbase.php");

    $site="SELECT * FROM site";
    $sit=$pdo->prepare($site);
    $sit->execute();

    if (!isset($_GET["code_site"])) 
        {        
          $activ="SELECT * FROM femmes_enceintes GROUP BY dateact";
          $act=$pdo->prepare($activ);
          $act->execute() ;           
        }
        else
        { 
          $f =$_GET['codesite'];
          $activ="SELECT * FROM femmes_enceintes GROUP BY dateactivite WHERE code_site='".$f."'";
          $act=$pdo->prepare($activ);
          $act->execute() ;   
        }
  ?>
<!DOCTYPE html>
  <html>
  <head> 
        <meta charset="utf-8" lang="fr">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
        <title>JOURNAL ACTIVITE PNNC</title>
  </head>
  <body>    
  <div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
<div class="container spacer col-sm-12 col-xs-49 col-md-offset-1">
  <div class="card">
    <?php while($et=$sit->fetch()) {; ?>
    <div class="panel-primary bg-info text-center">
      <h3>RAPPORT D'ACTIVITE PNCC :<em>Femmes enceintes</em></h3>
      <form>        
        <select name="nregion" class="text-center">
          <option alue="00" disabled selected>Séléctionner un site</option>
          <?php echo "<option value='".($et['nomsite'])."'>".utf8_encode($et['nomsite'])."</option>" ;?>
        </select><button  id="btn-filtre" class="btn btn-success">filtre</button>  
    </div> 
    <div class="container row">
      <div class="col-sm-2,1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <img src="../img/<?php  $im=($et['photosite']);echo($im) ;?>" width="234px" height="350px" alt="IMAGE SITE">
          </div>
        </div>
      </div>
    <?php  };?>
      <div class="col-md-2">
      <div class="panel-body">
        <table class="table">
          <?php while ($r=$act->fetch()) {;?>
          <thead class="text-center ">
            <tr>
              <th>Récensée</th>
              <th>Référée pour CPN</th>
              <th>Participant à l'EN</th>
              <th>Accouchement sous assistance médicale</th>
            </tr>            
          </thead>          
          <tbody class="text-center">
            <tr>
              <td><?php echo ($r["recence"]);?></td>
              <td><?php echo ($r["refere_cpn"]);?></td>
              <td><?php echo ($r["participant_en"]);?></td>
              <td><?php echo ($r["accouchement_med"]);?></td>
            </tr>
          </tbody>
        <?php } ;?>
        </table>
      </div>
    </div>
    </form>
</body>
</html>