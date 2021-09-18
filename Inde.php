<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div>
		<form method="POST" action="ong.php">

			<?php  require_once('ongbase.php');

			$lie="SELECT * FROM indicateur ORDER BY District ";
			$li=$pdo->prepare($lie);
          	$li->execute();?> 
          		<label for="control-label">SITE PNNC</label>      
                <select name="site" id="mod">
                  <?php while($et=$li->fetch()) {;
                     echo "<option value='".($et['Site'])."'>".utf8_encode($et['Site'])."</option>" ; 
                   };?> 
                </select></p>
			<div class="" id="">
			<fieldset>
				<legend>SITE PNNC</legend>
					<label class="control-label">OPERATIONNELLE/FONCTIONNELLE</label>
						<input type="number" name="of" id="of" size="5"></p>
					<label class="control-label">AYANT RAPPORT</label>
						<input type="number" name="ar" id="ar" size="5"></p>
			</fieldset>			
			<fieldset>
				<legend>FEMMES ENCEINTES</legend>
					<label class="control-label">RECENSEE</label>
						<input type="number" name="fe" id="rcs" size="5"></p>
					<label class="control-label">REFEREE POUR CPN</label>
						<input type="number" name="rfr" id="rpc" size="5"></p>
					<label class="control-label">PARTICIPANT A L'EN</label>
						<input type="number" name="pae" id="pae" size="5"></p>
					<label class="control-label">ACCOUCHEMENT SOUS ASSISTANT MEDICALE</label>
						<input type="number" name="rfr" id="assm" size="5"></p>
			</fieldset>
			<fieldset>
				<legend>NAISSANCES</legend>
					<label class="control-label">NOUVEAUX NES RECENSES</label>
						<input type="number" name="nnr" id="nr" size="5"></p>
					<label class="control-label">NOUVEAUX NES VIVANTS</label>
						<input type="number" name="nnv" id="nr" size="5"></p>
					<label class="control-label">MORTS NES</label>
						<input type="number" name="mn" id="nr" size="5"></p>
					<label class="control-label">POIDS DE NAISSANCE MOINS DE 2,5kg </label>
						<input type="number" name="pnm" id="nr" size="5"></p>
					<label class="control-label">TAILLE DE NAISSANCE MOINS DE 46cm</label>
						<input type="number" name="tnm" id="nr" size="5"></p>	
			</fieldset>
			<fieldset>
				<legend>ENFANTS 0 à 23 MOIS</legend>
					<div class="col-md">
						<div class="navbar" id="primo">
							<label class="control-label">0 à 5 MOIS RECENSES</label>
								<input type="number" name="0a5mrcs" id="23m" size="5"></p>
							<label class="control-label">6 à 11 MOIS RECENSES</label>
								<input type="number" name="6a11mrcs" id="23m" size="5"></p>
							<label class="control-label">11 à 23 MOIS RECENSES</label>
								<input type="number" name="11a23mrcs" id="23m" size="5">
						</div>
						<div class="" id="peses">
							<label class="control-label">0 à 5 MOIS PESES</label>
								<input type="number" name="0a5mps" id="a" size="5"></p>
							<label class="control-label">6 à 11 MOIS PESES</label>
								<input type="number" name="6a11mps" id="a" size="5"></p>
							<label class="control-label">11 à 23 MOIS PESES</label>
								<input type="number" name="11a23mps" id="a" size="5">
						</div>
						<div class="" id="peses" align="center">
							<label class="control-label">0 à 5 MOIS PESES (Z-2)</label>
								<input type="number" name="0a5mps2" id="a" size="5" ></p>
							<label class="control-label">6 à 11 MOIS PESES(Z-2)</label>
								<input type="number" name="6a11mps2" id="a" size="5" ></p>
							<label class="control-label">11 à 23 MOIS PESES(Z-2)</label>
								<input type="number" name="11a23mps2" id="a" size="5">
						</div>	
						<div class="" id="peses">
							<label class="control-label">0 à 5 MOIS PESES (Z-3)</label>
								<input type="number" name="0a5mps3" id="a" size="5"></p>
							<label class="control-label">6 à 11 MOIS PESES(Z-3)</label>
								<input type="number" name="6a11mps3" id="a" size="5"></p>
							<label class="control-label">11 à 23 MOIS PESES(Z-3)</label>
								<input type="number" name="11a23mps3" id="a" size="5">
						</div>			
					</div>					
			</fieldset>
			<fieldset>
				<legend>ENFANTS 24 à 59 MOIS</legend>
					<div id="primo">
						<label class="control-label">24 à 59 RECENSES</label>
							<input type="number" name="24a59rcs" id="24a59rcs" size="5">
						<label class="control-label">24 à 59 PESES</label>
							<input type="number" name="24a59ps" id="rfr" size="5">
					</div>
					<div id="peses">
						<label class="control-label">24 à 59 PESES (Z-2)</label>
							<input type="number" name="24a59ps2" id="pae" size="5">
						<label class="control-label">24 à 49 MOIS PESES (Z-3)</label>
							<input type="number" name="24a59ps3" id="rfr" size="5"></p>
					</div>			
			</fieldset>
			<fieldset>
				<legend>ENFANTS 6 à 59 MOIS</legend>
					<div id="primo">
						<label class="control-label">RECENSE</label>
							<input type="number" name="6a59rcs" id="fe" size="5"></p>
						<label class="control-label">MESURE EN PERIMETRE BRANCHIAL(MUAC/PB)</label>
							<input type="number" name="6a59m" id="rfr" size="5"></p>
					</div>
					<div id="peses">
						<label class="control-label">AYANT PB<115mm</label>
							<input type="number" name="6a59pb" id="pae" size="5"></p>
						<label class="control-label">AYANT PB entre 115/125mm </label>
							<input type="number" name="125pb" id="rfr" size="5"></p>
					</div>
					<div id="peses">
						<label class="control-label">AYANT PB<115mm + OEDEME</label>
							<input type="number" name="6a59mo" id="rfr" size="5"></p>
						<label class="control-label">AYANT PB entre 115/125mm + OEDEME</label>
							<input type="number" name="6a59pbo" id="pae" size="5"></p>
					</div>
					<div id="peses">
						<label class="control-label">MOIS REFERES CRENI</label>
							<input type="number" name="mrr" id="rfr" size="5"></p>
						<label class="control-label">MOIS REFERES CRENAS</label>
							<input type="number" name="mrs" id="rfr" size="5"></p>
					</div>
			</fieldset>			
			<fieldset>
				<legend>EDUCATION NUTRITIONNELLE</legend>
					<div id="primo">
						<label class="control-label">MERES 0-23 MOIS RECENSEES</label>
							<input type="number" name="mr0a23" id="nnr" size="5"></p>
						<label class="control-label">MERES 0-23 MOIS PARTICIPANT A L'E.N</label>
							<input type="number" name="0a23pen" id="nnv" size="5">
					</div>
					<div id="peses">
						<label class="control-label">MERES 24-59 MOIS RECENSEES</label>
							<input type="number" name="mr24a59" id="nm" size="5"></p>
						<label class="control-label">MERES 24-59 MOIS PARTICIPANT A L'E.N</label>
							<input type="number" name="24a59pen" id="mn" size="5">
					</div>
					<div id="peses">
						<label class="control-label">MERES 0-59 MOIS RECENSEES</label>
							<input type="number" name="mr0a59" id="pnm" size="5"></p>
						<label class="control-label">MERES 0-59 PARTICIPANT A L'E.N</label>
							<input type="number" name="0a59pen" id="nm" size="5">
					</div>			
			</fieldset>
			<fieldset>
				<legend>VISITE A DOMICILE</legend>
					<div id="primo">
						<label class="control-label">PREVUE MENAGE 0-23 MOIS</label>
							<input type="number" name="pm0a23" id="nnr" size="5"></p>
						<label class="control-label">PREVUE MENAGE 24-59 MOIS</label>
							<input type="number" name="pm24a49" id="nnv" size="5">
					</div>
					<div id="peses">
						<label class="control-label">PREVUE FEMME ENCEINTE</label>
							<input type="number" name="pfe" id="nm" size="5"></p>
						<label class="control-label">REALISEE MENAGE 0-23 MOIS</label>
							<input type="number" name="rm0a23" id="mn" size="5">
					</div>
					<div id="peses">
						<label class="control-label">REALISEE MENAGE 24-59 MOIS</label>
							<input type="number" name="rm24a59" id="pnm" size="5"></p>
						<label class="control-label">REALISEE FEMME ENCEINTE</label>
							<input type="number" name="rfe" id="nm" size="5">
					</div>			
			</fieldset>
			<fieldset>
				<legend>REFERENCE</legend>
					<div id="primo">
						<label class="control-label">ENFANTS 0-5 MOIS</label>
							<input type="number" name="e0a5" id="nnr" size="5"></p>
						<label class="control-label">ENFANTS 6-11 MOIS</label>
							<input type="number" name="e6a11" id="nnv" size="5"></p>
						<label class="control-label">ENFANTS 12-23 MOIS</label>
							<input type="number" name="e12a23" id="nm" size="5">
					</div>			
			</fieldset>	
			<fieldset>
				<legend>MENSURATION TAILLE ENFANTS</legend>
					<div id="primo">
						<label class="control-label">0-5 MOIS MESURES(Z-1)</label>
							<input type="number" name="e0a5m1" id="nnr" size="5"></p>
						<label class="control-label">0-5 MOIS MESURES(Z-2)</label>
							<input type="number" name="e0a5m2" id="nnv" size="5"></p>
						<label class="control-label">0-5 MOIS MESURES(Z-3)</label>
							<input type="number" name="e0a5m3" id="nnv" size="5">
					</div>
					<div id="peses">
						<label class="control-label">6-11 MOIS MESURES(Z-1)</label>
							<input type="number" name="e6a11m1" id="nnr" size="5"></p>
						<label class="control-label">6-11 MOIS MESURES(Z-2)</label>
							<input type="number" name="e6a11m2" id="nnv" size="5"></p>
						<label class="control-label">6-11 MOIS MESURES(Z-3)</label>
							<input type="number" name="e6a11m3" id="nnv" size="5">
					</div>
					<div id="peses">
						<label class="control-label">12-23 MOIS MESURES(Z-1)</label>
							<input type="number" name="e12a23m1" id="nnr" size="5"></p>
						<label class="control-label">12-23 MOIS MESURES(Z-2)</label>
							<input type="number" name="e12a23m2" id="nnv" size="5"></p>
						<label class="control-label">12-23 MOIS MESURES(Z-3)</label>
							<input type="number" name="e12a23m3" id="nnv" size="5">
					</div>
					<div id="peses">
						<label class="control-label">24-59 MOIS MESURES(Z-1)</label>
							<input type="number" name="e24a59m1" id="nnr" size="5"></p>
						<label class="control-label">24-59 AYANT TAILLE(Z-2)</label>
							<input type="number" name="e24a59m2" id="nnv" size="5"></p>
						<label class="control-label">12-23 AYANT TAILLE(Z-3)</label>
							<input type="number" name="e24a59m3" id="nnv" size="5">
					</div>
			</fieldset>
			<fieldset>
				<legend>COMPLEMENT ALIMENTATION ZAZATOMADY</legend>
					<div id="primo">
						<label class="control-label">RECUE</label>
							<input type="number" name="zztr" id="nnr" size="5"></p>
						<label class="control-label">DISTRIBUEE</label>
							<input type="number" name="zztd" id="nnv" size="5"></p>
						<label class="control-label">ENF 6-23 MOIS AYANT RECU</label>
							<input type="number" name="zzte" id="nm" size="5">
					</div>			
			</fieldset>
			<fieldset>
				<legend>ALLAITEMENT MATERNEL</legend>
					<div id="primo">
						<label class="control-label">ENF 0-5 MOIS ENCORE ALLAITES AUX SEINS</label>
							<input type="number" name="am0a5" id="nnr" size="5"></p>
						<label class="control-label">ENF 6-11 MOIS ENCORE ALLAITES AUX SEINS</label>
							<input type="number" name="am6a11" id="nnv" size="5"></p>
						<label class="control-label">ENF 12-23 MOIS ENCORE ALLAITES AUX SEINS</label>
							<input type="number" name="am12a23" id="nm" size="5">
					</div>			
			</fieldset>	
			<fieldset>
				<legend>AGR MENAGES</legend>
					<div id="primo">
						<label class="control-label">MENAGES BENEFICIAIRE AGR</label>
							<input type="number" name="amba" id="nnr" size="5"></p>
						<label class="control-label">AGR ENCORE OPERATIONNELLE</label>
							<input type="number" name="ageo" id="nnv" size="5"></p>
						<label class="control-label">AGR OPERATIONNELLE + EXTENSION/DIVERSIFICATION</label>
							<input type="number" name="agoed" id="nm" size="5">
					</div>			
			</fieldset>
			<fieldset>
				<legend>AGR ACN</legend>
					<div id="primo">
						<label class="control-label">BENEFICIAIRE AGR</label>
							<input type="number" name="aba" id="nnr" size="5"></p>
						<label class="control-label">AGR ENCORE OPERATIONNELLE</label>
							<input type="number" name="aageo" id="nnv" size="5"></p>
						<label class="control-label">AGR OPERATIONNELLE + EXTENSION/DIVERSIFICATION</label>
							<input type="number" name="aagoed" id="nm" size="5">
					</div>			
			</fieldset>
			<fieldset>
				<legend>DEMONSTRATIONS CULINAIRES REALISER</legend>
					<div id="primo">
						<label class="control-label">0-5 MOIS</label>
							<input type="number" name="d0a5" id="nnr" size="5"></p>
						<label class="control-label">6-11 MOIS</label>
							<input type="number" name="d6a11" id="nnv" size="5">
					</div>
					<div id="peses">
						<label class="control-label">12-23 MOIS</label>
							<input type="number" name="d12a23" id="nm" size="5"></p>
						<label class="control-label">24-59 MOIS</label>
							<input type="number" name="d24a59" id="nm" size="5">
					</div>			
			</fieldset>		
			</div>
			<button id="btn" >Enregistrer</button>
		</form>
	</div>
</body>
</html>