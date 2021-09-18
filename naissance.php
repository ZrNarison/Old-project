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
		<div class="panel-primary bg-info"><h3>ACTIVITE PNCC :<em>Naissance</em></h3> </div>
		<div class="panel-body col-md-7">
			<form method="POST" action="ajout/p_naissance.php">
				<div class="body-panel-body" id="primo">
				<!--?php  require_once("ajout/ongbase.php");$lie="SELECT * FROM site ORDER BY nom_site";$li=$pdo->prepare($lie);$li->execute();?>
					<div class="form-group">
						<label class="control-label">Lieu du site</label>
        	    		<select name="site" id="mod" class="form-control">
						   <option value="" disabled selected>Séléctionner une de Site PNNC</option>
							   <!?php while($et=$li->fetch()) {;echo "<option value='".($et['code_site'])."'>".utf8_encode($et['nom_site'])."</option>" ;};?>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Date </label>
                		<input type="date" name="date" class="form-control" id="date" required/>
					</div-->
					<div class="form-group">
						<label class="control-label">Nouveau nés récensées:</label>
						<input type="text" name="a1" id="uname" class="form-control" placeholder="récensées" size="22" required/>
					</div>
                	<div class="form-group">
                		<label class="control-label">Nouveau nés vivant:</label>
						<input type="text" name="a2" id="a2" placeholder="nés vivant" class="form-control" size="22" required/>
					</div>
					<div class="form-group">
                		<label class="control-label">Mort nés :</label>
						<input type="text" name="a3" id="a3" placeholder="Mort nés" class="form-control" size="22" required/>
					</div>
					<div class="form-group">
                		<label class="control-label">Poids moins de 2,500Kg :</label>
						<input type="text" name="a4" id="a4" placeholder="p<2,5kg" class="form-control" size="22" required/>
					</div>
					<div class="form-group">
                		<label class="control-label">Taille moins de 46cm :</label>
						<input type="text" name="a5" id="a5" placeholder="T<46cm" class="form-control" size="22" required/>
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
<style type="text/css">
	#uname,#a2,#a3,#a4,#a5{width: 90px}#date{width: 140px}#mod{width: 290px}
</style>
</html>