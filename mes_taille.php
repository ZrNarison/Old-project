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
			<div class="container spacer col-md-8 col-xs-12 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading"><h3>ACTIVITE PNCC :<em>Mensuration taille</em></h3> </div>
						<div class="panel-body">
							<form method="POST" action="../ajout/p_mes_taille.php">
								<div class="body-panel-body" id="primo">
									<?php  require_once('../ajout/ongbase.php');$lie="SELECT * FROM site ORDER BY NOMSITE";$li=$pdo->prepare($lie);$li->execute();?>
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
										<fieldset class="col-md-4">
											<legend>Mésures (M-1)</legend>
												<div class="form-group">
													<label class="control-label">0 a 5 mois:</label>
													<input type="text" name="a1" id="uname" class="form-control" placeholder="0a5 mois" size="22" />
												</div>
												<div class="form-group">
													<label class="control-label">6 a 11 mois:</label>
													<input type="text" name="b1" id="a2" placeholder="6a11 mois" class="form-control" size="22" />
												</div>
												<div class="form-group">
													<label class="control-label">12 a 23 mois:</label>
													<input type="text" name="c1" id="a3" placeholder="12 a 23 mois" class="form-control" size="22"/>
												</div>
												<div class="form-group">
													<label class="control-label">24 a 59 mois:</label>
													<input type="text" name="d1" id="a4" placeholder="24 a 59 mois" class="form-control" size="22" />
												</div>
											</fieldset>
											<fieldset class="col-md-4">
											<legend>Mésures (M-2)</legend>
												<div class="form-group">
													<label class="control-label">0 a 5 mois:</label>
													<input type="text" name="a3" id="uname" class="form-control" placeholder="0a5 mois" size="22"/>
												</div>
												<div class="form-group">
													<label class="control-label">6 a 11 mois:</label>
													<input type="text" name="b3" id="a2" placeholder="6a11 mois" class="form-control" size="22" />
												</div>
												<div class="form-group">
													<label class="control-label">12 a 23 mois:</label>
													<input type="text" name="c3" id="a3" placeholder="12 a 23 mois" class="form-control" size="22" />
												</div>
												<div class="form-group">
													<label class="control-label">24 a 59 mois:</label>
													<input type="text" name="d3" id="a4" placeholder="24 a 59 mois" class="form-control" size="22" />
												</div>
											</fieldset>
											<fieldset class="col-md">
											<legend>Mésures (M-3)</legend>
												<div class="form-group">
													<label class="control-label">0 a 5 mois:</label>
													<input type="text" name="a4" id="uname" class="form-control" placeholder="0a5 mois" size="22" />
												</div>
												<div class="form-group">
													<label class="control-label">6 a 11 mois:</label>
													<input type="text" name="b4" id="a2" placeholder="6a11 mois" class="form-control" size="22"/>
												</div>
												<div class="form-group">
													<label class="control-label">12 a 23 mois:</label>
													<input type="text" name="c4" id="a3" placeholder="12 a 23 mois" class="form-control" size="22"/>
												</div>
												<div class="form-group">
													<label class="control-label">24 a 59 mois:</label>
													<input type="text" name="d4" id="a4" placeholder="24 a 59 mois" class="form-control" size="22"/>
												</div>
											</fieldset>
									<div  class="btn-block">
										<button  id="btn-action" class="buttom" background-color="blue">ENREGISTRER</button>
									</div>													
								</div>																	
							</div>
						</div>				
					</form>
				</div>
			</div>
		</form>
	</div>
</body>
<style type="text/css">
	#uname,#a2,#a3,#a4,#a5{width: 90px}#date{width: 140px}#mod{width: 290px}
</style>
</html>