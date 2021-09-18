<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" lang="fr"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/verif.js"></script>
	<script type="text/javascript" src="js/jquery-validate.js"></script>
</head>
<body style="margin:140px">
<div class="container spacer col-md-5 col-xs-8 col-md-offset-3">
	<div class="card center">
		<div class="panel-primary bg-info text-center"><h3>LOGIN</h3> </div>
		<div class="panel-body col-md-12">
			<form action="ajout/validate.php" method="POST" id="formlogin">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label">Utilisateur :</label>
						<select name="pseudo" class="form-control text-center">
							<option  value=""  disabled selected>-- Utilisateur --</option>
							<?php require_once("./ajout/verficateur.php");while($rel=$lieure->fetch()) {;echo "<option value='".($rel['user'])."'>".utf8_encode($rel['user'])."</option>" ;};?> 
                		</select>
					</div>
					<!--div class="form-group">
						<label class="control-label">Utilisateur </label>
        				<input type="text" name="pseudo" id="users" class="form-control" />
					</div-->
					<div class="form-group">
						<label class="control-label">Mot de pass</label>
						<input type="password" name="password" id="passwordlogin" class="form-control" />
					</div>
					<div class="form-group">
						<input type="checkbox" name="checkbox" id="checkbox"/>
						<label class="text-bold">Afficher le mot de pass</label>
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