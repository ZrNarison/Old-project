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
		<div class="panel-primary bg-info"><h3>ACTIVITE PNCC :<em>Enfant 0 à 59 mois</em></h3> </div>
		<div class="panel-body col-md-12">
			<form method="POST" action="ajout/p_enf_0a59.php" id="enf_0a59">
				<div class="body-panel-body">
					<!--?php  require_once("ajout/ongbase.php");$lie="SELECT * FROM site ORDER BY NOM_SITE";$li=$pdo->prepare($lie);$li->execute();?>
					<div class="form-group">
						<label class="control-label">Lieu du site</label>
        	   			<select name="site" id="mod" class="form-control">
						   <option value="" disabled selected>Séléctionner une de Site PNNC</option>
							   <!-?php while($et=$li->fetch()) {;echo "<option value='".($et['code_site'])."'>".utf8_encode($et['nom_site'])."</option>" ;};?>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Date </label>
               			<input type="date" name="date" class="form-control" id="date"/>
					</div-->
					<div id="primo"  clss="col-md-7">
						<fieldset  id="recense">
							<legend>Rencensés</legend>
							<div class="form-group">
								<label class="control-label">0 a 5 mois:</label>
								<input type="text" name="a1" id="a1" class="form-control" placeholder="récensées"/>
							</div>
							<div class="form-group">
								<label class="control-label">6 a 11 mois:</label>
								<input type="text" name="b1" id="a2" placeholder="récensés" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">12 a 23 mois:</label>
								<input type="text" name="c1" id="a3" placeholder="récensés" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">24 a 59 mois:</label>
								<input type="text" name="d1" id="a4" placeholder="récensés" class="form-control"/>
							</div>
						</fieldset>
						<fieldset id="z-1">
							<legend>Pesés (Z-1)</legend>
							<div class="form-group">
								<label class="control-label">0 a 5 mois:</label>
								<input type="text" name="a2" id="a1" class="form-control" placeholder="pesés Z1"/>
							</div>
							<div class="form-group">
								<label class="control-label">6 a 11 mois:</label>
								<input type="text" name="b2" id="a2" placeholder="pesés Z1" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">12 a 23 mois:</label>
								<input type="text" name="c2" id="a3" placeholder="pesés Z1" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">24 a 59 mois:</label>
								<input type="text" name="d2" id="a4" placeholder="pesés Z1" class="form-control"/>
							</div>
						</fieldset>
					</div>
					<div id="second" clss="col-md-7">
						<fieldset id="z-2">
							<legend>Pesés (Z-2)</legend>
							<div class="form-group">
								<label class="control-label">0 a 5 mois:</label>
								<input type="text" name="a3" id="a1" class="form-control" placeholder="pesés Z2"/>
							</div>
							<div class="form-group">
								<label class="control-label">6 a 11 mois:</label>
								<input type="text" name="b3" id="a2" placeholder="pesés Z2" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">12 a 23 mois:</label>
								<input type="text" name="c3" id="a3" placeholder="pesés Z2" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">24 a 59 mois:</label>
								<input type="text" name="d3" id="a4" placeholder="pesés Z2" class="form-control"/>
							</div>
						</fieldset>
						<fieldset id="z-3" >
						<legend>Pesés (Z-3)</legend>
							<div class="form-group">
								<label class="control-label">0 a 5 mois:</label>
								<input type="text" name="a4" id="a1" class="form-control" placeholder="pesés Z3"/>
							</div>
							<div class="form-group">
								<label class="control-label">6 a 11 mois:</label>
								<input type="text" name="b4" id="a2" placeholder="pesés Z3" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">12 a 23 mois:</label>
								<input type="text" name="c4" id="a3" placeholder="pesés Z3" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">24 a 59 mois:</label>
								<input type="text" name="d4" id="a4" placeholder="pesés Z3" class="form-control"/>
							</div>
					</fieldset>
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