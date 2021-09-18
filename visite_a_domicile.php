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
		<div class="panel-primary bg-info"><h3>ACTIVITE PNCC :<em>Visite à domicile</em></h3> </div>
		<div class="panel-body col-md-7">
			<form method="POST" action="../ajout/p_visi_dom.php">
				<div class="body-panel-body" id="primo">
					<?php  require_once('../ajout/ongbase.php');$lie="SELECT * FROM site ORDER BY NOM_SITE";$li=$pdo->prepare($lie);$li->execute();?>
					<div class="form-group">
						<label class="control-label">Lieu du site</label>      
        				<select name="site" id="mod" class="form-control">
							<option value="" disabled selected>Séléctionner une de Site PNNC</option>
							<?php while($et=$li->fetch()) {;echo "<option value='".($et['nomsite'])."'>".utf8_encode($et['nomsite'])."</option>" ;};?>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Date </label>	
               			<input type="date" name="date" class="form-control" id="date" />
					</div>
					<div class="col-xs-12">
						<fieldset class="col-xs-7" id="prevu">
							<legend>Prévu menage</legend>
								<div class="form-group">
									<label class="control-label">0 a 23 mois:</label>
									<input type="text" name="a1" id="uname" class="form-control" placeholder="récensées" size="22" />
								</div>
								<div class="form-group">
									<label class="control-label">24 a 59 mois:</label>
									<input type="text" name="b1" id="a2" placeholder="récensés" class="form-control" size="22" />
								</div>
								<div class="form-group">
									<label class="control-label">Femme enceinte:</label>
									<input type="text" name="c1" id="a3" placeholder="récensés" class="form-control" size="22"/>
								</div>
						</fieldset>
						<fieldset class="col-xs-8" id="realise">
							<legend>Réalisé menage</legend>
								<div class="form-group">
									<label class="control-label">0 a 23 mois:</label>
									<input type="text" name="a2" id="uname" class="form-control" placeholder="pesés Z1" size="22" />
								</div>
								<div class="form-group">
									<label class="control-label">24 a 59 mois:</label>
									<input type="text" name="b2" id="a2" placeholder="pesés Z1" class="form-control" size="22" />
								</div>
							<div class="form-group">
								<label class="control-label">Femme enceinte:</label>
								<input type="text" name="c2" id="a3" placeholder="pesés Z1" class="form-control" size="22" />
							</div>
						</fieldset>
					</div>
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-success" name="button" background-color="blue">ENREGISTRER</button>
					</div>													
				</div>				
			</form>
		</div>
	</div>
</div>
</body>
<style type="text/css">
	#uname,#a2,#a3,#a4,#a5{width: 90px}#date{width: 140px}#mod{width: 290px}#prevu{float:left}#realise{margin left:100%}
</style>
</html>