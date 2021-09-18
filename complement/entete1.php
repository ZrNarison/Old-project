<?php require_once("../ajout/ongbase.php");
		
		$pro="SELECT DISTINCT nomregion FROM region ";
		$pr=$pdo->prepare($pro);
		$pr->execute();
		 ?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<img src="../img/1.jpg" width="150" height="150">
		</div>
		<div class="col-sm-4">
			<h1>PRIMATURE</h1>
			<h2>OFFICE NATIONAL DE NUTRITION</h2>
			<h4>OFFICE REGIONAL DE NUTRITION<select><?php while($am=$pr->fetch()){;echo "<option value='" .($am['nomregion'])."'>".utf8_encode($am['nomregion'])."</option>" ;};?></select></h4>
		</div>	
		<div class="col-sm-4">
			<img src="../img/1.jpg" width="150" height="150">
		</div>
	</div>
</div>