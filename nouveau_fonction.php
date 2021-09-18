<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="fr"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/verif.js"></script>
    <script type="text/javascript" src="js/jquery-validate.js"></script>
    <title>ACTIVITE PNNC</title>
</head>
<body>
<div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
<div class="container spacer col-md-9 col-xs-12 col-md-offset-3">
	<div class="card">
		<div class="panel-primary bg-info"><h3>BRANCHE :<em>Fonction</em></h3> </div>
		<div class="panel-body col-md-12">
			<form method="POST" action="ajout/ajoutfonction.php" id="fonction">
				<div class="body-panel-body">
                    <div class="form-group">
                        <label class="control-label">Fonction :</label>
                        <input type="text"  name="fonction" id="fonction" placeholder="Entrer une fonction" class="form-control text-center" required />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Rôle :</label>
                    </div>
                    <div>
                        <textarea name="f_role" id="f_role"></textarea>
                        <!--input type="Area"  name="f_role" id="f_role" placeholder="Entrer le nom du nouveau COMMUNE" class="form-control text-center" required /-->
                    </div>
                    <div  class="row col-sm-3">
                        <button  id="btn-action" class="btn btn-success" name="button" background-color="blue">ENREGISTRER</button>
                    </div>
			    </div>
		    </form>
    	</div>
    </div>
</div>
</body>
</html>