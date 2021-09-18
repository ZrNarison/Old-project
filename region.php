<?php require_once("ongbase.php");
        
    $dis="SELECT *  FROM province";
    $di=$pdo->prepare($dis);
    $di->execute();
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.min.js"/> 
    <link rel="stylesheet" type="text/css" href="css/style.js"/>  
	<title></title>
</head>
<body>
	<div><?php require("entete.php") ;?></div>
	<div>
		<div class="headding"><?php require("tete.php"); ?></div>
			<div id="frm">
          		<form method="POST" action="aregion.php">
            		<div class="panel-body">
              			<div class="body-panel-body">
              				<div class="form-group">
                  				<label class="control-label">CODE PROVINCE</label>
                  				<select name="co_province" id="mod">
                    				<option value="" disabled selected>Séléctionner une province</option> 
                      					<?php while($q=$di->fetch()) {;echo "<option value='".($q['nomPROVINCE'])."'>".utf8_encode($q['nomprovince'])."</option>" ;};?></select>
                  			<div class="form-group">
                  				<label class="control-label">NOM DU REGION</label>
                  				<input type="text" name="n_region" size="27" placeholder="Entrer le nom du nouveau region"/>
                  			</div>                  				
              				<div  class="row col-sm-3">
								<button  id="btn-action" class="btn btn-success" name="button" background-color="blue">ENREGISTRER</button>
							</div>
             			</div>
            		</div>
        		</form>
        	</div>
    </div>
</body>
</html>