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
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
	<div class="card">
		<div class="panel-primary bg-info"><h3>ACTIVITE PNCC :<em>Site</em></h3> </div>
		<div class="panel-body col-md-7">
			<form  method="POST" action="ajout/p_ay_rapport.php" id="index_action">
				<div class="body-panel-body" id="primo">
					<div class="form-group">
						<label class="control-label">Lieu du site</label>
   	    				<select name="site" id="datemod" style="width: 290px" class="form-control" onchange="io">
						   <option value="" disabled selected>Séléctionner une de Site PNNC</option>
						   <?php include('ajout/req_site.php');while($et=$li->fetch()) {;echo "<option value='".($et['code_site'])."'>".utf8_encode($et['nom_site'])."</option>" ;};?> 
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Date </label>
                		<input type="date" name="date" id="date" style="width: 140px" class="form-control text-center" />
					</div>
					<div class="form-group">
						<label class="control-label">Site fonctionnelle et opérationnelle</label>
						<input type="text" name="a1" id="a1site" style="width: 140px" class="form-control text-center" placeholder="Fonctionnelle et Opérationnelle" size="22"/>
					</div>
                	<div class="form-group">
                		<label class="control-label">Site ayant rapport</label>
						<input type="text" name="a2" id="a2site" placeholder="Ayant Rapport" style="width: 140px" class="form-control text-center" onchange="rapportage()" />
					</div>
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-success" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>