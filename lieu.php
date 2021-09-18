<!DOCTYPE html>
  <html>
  <head> 
    <?php require_once("ongbase.php");
          $site="SELECT DISTINCT nomsite FROM site ORDER BY nomsite";
          $sit=$pdo->prepare($site);
          $sit->execute();
          $reg="SELECT DISTINCT nomregion FROM region ORDER BY nomregion";
          $re=$pdo->prepare($reg);
          $re->execute();
        ?>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/> 
    <title>Ajout</title>
  </head>
  <body>
  <div class="jumbotron text-center"><?php require("entete.php") ;?></div>
    <div class="">
      <div class=""><?php require("tete.php") ?></div>
        <div class="panel-form">
          <div class="col-mx-8">
          <form method="POST" action="comm.php">
            <legend for="control-label"><em><strong>NOUVEAUX SITE</strong></em></legend>
              <label class="control-label">REGION</label>
              <select name="1a" id="1a">
                <?php while($r=$re->fetch()) {;
                     echo "<option value='".($r['nomregion'])."'>".utf8_encode($r['nomregion'])."</option>" ; 
                   };?> 
              </select></p>              
              <label class="control-label">DISTRICT</label>
               <input type="text" name="2a" id="2a" size="20"></p>
              <label class="control-label">COMMUNE</label>
               <input type="text" name="3a" id="3a" size="20"></p>
              <label class="control-label">SITE</label>
               <select name="4a" id="4a">
                 <?php while($cd=$sit->fetch()) {;
                     echo "<option value='".($cd['nomsite'])."'>".utf8_encode($cd['nomsite'])."</option>" ; 
                   };?> 
                  </select></p>
               </select>    
            <input type="submit" id="btn" value="Enregistrer" />
          </form>
        </div>       
  </body>
  <script type="text/javascript">
    function charger_nomsite()
    {
      var a="";
      
    }
  </script>
  </html>
