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
		<div class="panel-primary bg-info"><h3>ACTIVITE PNCC :<em>Enfant de 6 à 59 mois</em></h3> </div>
		<div class="panel-body col-md-12">
			<form method="POST" action="ajout/p_enf_6a59.php" id="enf_6a59">
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
					<div class="col-md-8 ">
						<fieldset  id="recense"  class="col-md-8 col-xs-12">
							<legend>Rencensés</legend>
							<div class="form-group">
								<label class="control-label">Récensés :</label>
								<input type="text" name="a1" id="uname" class="form-control" placeholder="récensées"/>
							</div>
							<div class="form-group">
								<label class="control-label">MUAC/PB </label>
								<input type="text" name="b1" id="a2" placeholder="muac/pb" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">Ayant PB inféieur à 115 mm </label>
								<input type="text" name="c1" id="a3" placeholder="pb<115mm" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">Ayant 115< PB 125 mm</label>
								<input type="text" name="d1" id="a4" placeholder="115<pb<125" class="form-control"/>
							</div>
						</fieldset>
						<fieldset i="z-1"  class="col-xs-12">
							<legend>Pesés (Z-1)</legend>
							<div class="form-group">
								<label class="control-label">Ayant 115mm + oedeme</label>
								<input type="text" name="e1" id="uname" class="form-control" placeholder="115mm+oedeme"/>
							</div>
							<div class="form-group">
								<label class="control-label">Ayant 115< PB < 125 + oedeme</label>
								<input type="text" name="f1" id="uname" class="form-control" placeholder="115<pb<125"/>
							</div>
							<div class="form-group">
								<label class="control-label">Réferé CRENI</label>
								<input type="text" name="g1" id="a2" placeholder="créni" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">Réferé CRENAS</label>
								<input type="text" name="h1" id="a3" placeholder="Crénas" class="form-control"/>
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