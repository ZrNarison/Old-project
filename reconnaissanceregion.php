<!DOCTYPE html>
  <html>
  <head> 
    <?php require_once("ongbase.php");
          $req="SELECT DISTINCT nomsite FROM site ORDER BY nomsite";
          $liaison=$pdo->prepare($req);
          $liaison->execute(); 
        ?>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/> 
    <title>Ajout</title>
  </head>
  <body>
  
        <div id="frm">
          <form method="POST" action="entree.php">
            <legend for="control-label"><em><strong>RECONNAISANCE COMMUNALE</strong></em></legend>
              <label for="control-label">CODE COMMUNE</label>
                <input type="text"  name="cc" width="50%" id="nm" size="38"></p>
              <label for="control-label">NOM DU COMMUNE</label>
                <input type="text"  name="nc" id="prn" size="38"></p>
              <label for="control-label">SITE PNNC</label>      
                <select name="ns" id="mod">
                  <?php while($et=$liaison->fetch()) {;
                     echo "<option value='".($et['nomsite'])."'>".utf8_encode($et['nomsite'])."</option>" ; 
                   };?> 
                </select></p>                 
            <input type="submit" id="btn" value="Enregistrer"/>
          </form>
        </div>       
  </body>
  </html>
