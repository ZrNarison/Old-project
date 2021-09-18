<?php
	//Connection à la base de données
	include("ongbase.php");
		
		$fon 		 	=mb_strtoupper($_POST['fonction']);
		$tache 		 	=$_POST['f_role'];
		//Vérification de donnée de la base données
		$requete="SELECT fonct AS fn FROM fonction WHERE fonct='".$fon."'";
		$retour=$pdo->prepare($requete);
		$retour->execute();
		$ret=$retour->fetch();
	
	try {
		if($ret["fn"]==$fon){
			print(mb_strtoupper(($fon)." éxiste déjà"));#Message envoyé
		}else{	
				//Insertion de le champ de la table
				$pro = $pdo -> prepare ("INSERT INTO fonction (fonct,role) VALUES (?,?)");
				$pr  = array($fon,$tache);
				$pro -> execute($pr);
				header("location:../nouveau_fonction.php");
			};
	} catch (Exception $e) {$msg = 'ERREUR PDO dans ' . $e->getMessage();
	die ($msg);		
	}
?>