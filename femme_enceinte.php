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
		<div class="panel-primary bg-info"><h3>ACTIVITE PNCC :<em>Femme enceinte</em></h3> </div>
		<div class="panel-body col-md-7">
		<!--?php $code=$_GET['site']; echo($code);?-->
			<form method="POST" action="ajout/p_fe_enceinte.php" id="femmeenceinte">
				<div class="body-panel-body" id="primo">
					<!--?php  include_once('ajout/ongbase.php');$lie="SELECT * FROM site ORDER BY NOM_SITE";$li=$pdo->prepare($lie);$li->execute();?>
					<div class="form-group">
						<label class="control-label">Lieu du site</label>      
        				<select name="sitefm" id="mod" class="form-control">
						<option value="" disabled selected>Séléctionner une de Site PNNC</option>
						<!?php while($et=$li->fetch()) {;echo "<option value='".($et['code_site'])."'>".utf8_encode($et['nom_site'])."</option>" ;};?>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Date </label>	
                		<input type="date" name="datefm" class="form-control" id="date"/>
					</div-->
					<div class="form-group">
						<label class="control-label">Récensées:</label>
						<input type="text" name="a1fm" id="a1" class="form-control" placeholder="récensées" size="22"/>
					</div>
                	<div class="form-group">
                		<label class="control-label">Réferé pour CPN:</label>
						<input type="text" name="a2fm" id="a2" placeholder="réferé CPN" class="form-control" size="22"/>
					</div>
					<div class="form-group">
                		<label class="control-label">Participe à l'EN:</label>
						<input type="text" name="a3fm" id="a3" placeholder="participe EN" class="form-control" size="22"/>
					</div>
					<div class="form-group">
                		<label class="control-label">Accouchement assisté par assistant médicale:</label>
						<input type="text" name="a4fm" id="a4" placeholder="acc ass médical" class="form-control" size="22"/>
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