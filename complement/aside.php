<?php require_once("ongbase.php");
		
		$pro="SELECT DISTINCT nomregion FROM region ";
		$pr=$pdo->prepare($pro);
		$pr->execute();
		 ?>
<div class="front">
	ASIDE
</div>