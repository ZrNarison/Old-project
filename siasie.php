<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		<form method="POST" action="ong.php">
			<div class="panel-head"><h3>ACTIVITE PNNC</h3>
				<div class="form-group">
					<label>Nom site PNNC</label><br>
					<?php  require_once('ongbase.php');$lie="SELECT * FROM site ORDER BY NOMSITE";$li=$pdo->prepare($lie);$li->execute();?>
					<select name="site" id="mod">
                		<option value="" disabled selected>Sélécionner une de Site PNNC</option><?php while($et=$li->fetch()) {;echo "<option value='".($et['nomsite'])."'>".utf8_encode($et['nomsite'])/*($et['CODECOMMUNE'])*/."</option>" ; 
                   }; required?></select>
				</div>                
                <div class="form-group">
                	<label>Date d'arrivée</label><br>
                	<input type="date" name="date" required/>
                </div>                	
				<div class="form-group">
					<label> Site fonctionnnelle et opérationnelle</label><br>
					<input type="text" name="of" id="of" size="8" placeholder="Numérique">
				</div>
				<div class="form-group">
					<label class="control-label">Site ayant rapport</label><br>
					<input type="text" name="ar" id="ar" size="8" placeholder="Numérique">
				</div>
				<div class="form-group">
					<label>Femmes enceinte récensée</label><br>
					<input type="text" name="fe" id="rcs" size="8"  placeholder="Numérique">
				</div>
				<div class="form-group">
					<label>Femmes enceinte référe CPN</label>
					<input type="text" name="rfr" id="rpc" size="8" placeholder="Numérique">
				</div>
				<div class="form-group">
					<label>Femme enceinte participant EN</label>
					<input type="text" name="pae" id="pae"  size="8" placeholder="Numérique">
				</div>
				<div class="form-group">
					<label>Femme enceinte accoucher sous assistant médical</label>
					<input type="text" name="rfr" id="assm"size="8" placeholder="Numérique">
				</div>
						<div>
							<label>Nouveau nais récensées</label><input type="text" name="nnr" id="nr" size="8" placeholder="Numérique">
						</div>
						<div>
							<label>Nouveau nais vivant</label><input type="text" name="nnv" id="nr" size="8" placeholder="Numérique">
						</div>
						<div>
							<label>Mort en naissance</label><input type="text" name="mn" id="nr" size="8" placeholder="Numérique">
						</div>
						<div>
							<label>Poids de naissance moins de 2,5Kg</label>
							<input type="text" name="pnm" id="nr" size="8" placeholder="Numérique">
						</div>
						<div>
							<label>Taille de naissance moins de 46CM</label>
							<input type="text" name="tnm" id="nr" size="8" placeholder="Numérique">
						</div>
						<div class="form-group">
							<label>Enfant de 0 a 5 mois récensées</label>
							<input type="text" name="0a5mrcs" id="23m" size="8" placeholder="Numérique">
						</div>
						<div class="form-group">
							<label>Enfant de 6 a 11 mois récensées</label>
							<input type="text" name="6a11mrcs" id="23m" size="8" placeholder="Numérique">
						</div>
						<div class="form-group">
							<label>Enfant de 12 a 23 mois récensées</label>
							<input type="text" name="11a23mrcs" id="23m" size="8" placeholder="Numérique">
						</div>
						<div class="form-group">
							<label>Enfant de 24 a 59 mois récensées</label>
							<input type="text" name="24a59rcs" id="24a59rcs" size="8" placeholder="Numérique">
						</div>	
						<div class="form-group">
							<label>Enfant de 0 a 5 mois pésées (Z-1)</label>
							<input type="text" name="0a5mps" id="a" size="8" placeholder="Numérique">
						</div>
						<div class="form-group">
							<label>Enfant de 6 a 11 mois pésées (Z-1)</label>
							<input type="text" name="6a11mps" id="a" size="8" placeholder="Numérique">
						</div>
						<div>
							<label>Enfant de 12 a 23 mois pésées (Z-1)</label>
							<input type="text" name="11a23mps" id="a" size="8" placeholder="Numérique">
						</div>
						<div>
							<label>Enfant de 24 a 59 mois pésées (Z-1)</label>
							<input type="text" name="24a59ps" id="rfr" size="8" placeholder="Numérique">
						</div>
					
					
					
				</div>
				<div class="body-panel-body" id="condo">			
					<input type="text" name="0a5mps2" id="a" size="25" placeholder="Enf 0 a 5 mois pesées (Z-2)"></p>
					<input type="text" name="6a11mps2" id="a" size="25" placeholder="Enf 6 a 11 mois pesées (Z-2)"></p>
					<input type="text" name="11a23mps2" id="a" size="25" placeholder="Enf 12 a 23 mois pesées (Z-2)"></p>
					<input type="text" name="24a59ps2" id="pae" size="25" placeholder="Enf 24 a 59 mois pesées (Z-2)"></p>
					<input type="text" name="0a5mps3" id="a" size="25" placeholder="Enf 0 a 5 mois pesées (Z-3)"></p>
					<input type="text" name="6a11mps3" id="a" size="25" placeholder="Enf 6 a 11 mois pesées (Z-3)"></p>
					<input type="text" name="11a23mps3" id="a" size="25" placeholder="Enf 12 a 23 mois pesées (Z-3)"></p>
					<input type="text" name="24a59ps3" id="rfr" size="25" placeholder="Enf 24 a 59 mois pesées (Z-3)"></p>
					<input type="text" name="6a59rcs" id="fe" size="25" placeholder="Enf 6 a 59 mois récensées"></p>
					<input type="text" name="6a59m" id="rfr" size="25" placeholder="Enf 6 a 59 mensuration en perimetre MUAC/PB"></p>
					<input type="text" name="6a59pb" id="pae" size="27" placeholder="Enf 6 a 59 ayant PB<115mm"></p>
					<input type="text" name="125pb" id="rfr" size="27" placeholder="Enf 6 a 59 ayant 115mm<PB<125mm"></p>
					<input type="text" name="6a59mo" id="rfr" size="27" placeholder="Enf 6 a 59 ayant PB<115mm+OEDEME"></p>
					<input type="text" name="6a59pbo" id="pae" size="27" placeholder="Enf 6 a 59 ayant 115mm<PB<125mm+OEDEME"></p>
					<input type="text" name="mrr" id="rfr" size="27" placeholder="Enf 6 a 59 mois référé CRENI"></p>
					<input type="text" name="mrs" id="rfr" size="27" placeholder="Enf 6 a 59 mois référé CRENAS"></p>
					<input type="text" name="mr0a23" id="nnr" size="27" placeholder="Educ.Nutr Mere 0 a 23 récensées"></p>
					<input type="text" name="mr24a59" id="nm" size="27" placeholder="Educ.Nutr Mere 24 a 59 récensées"></p>
					<input type="text" name="0a23pen" id="nnv" size="27" placeholder="Educ.Nutr Mere 0 a 23 Participant à l'EN">									
				</div>
				<div class="body-panel-body" id="trio">					
					<input type="text" name="24a59pen" id="mn" size="25" placeholder="Educ.Nutr Mere 24 a 59 Participant à l'EN"></p>
					<input type="text" name="pm0a23" id="nnr" size="25" placeholder="VAD prevu ménage 0 a 23 mois"></p>
					<input type="text" name="pm24a49" id="nnv" size="25" placeholder="VAD prevu ménage 24 a 59 mois"></p>
					<input type="text" name="pfe" id="nm" size="25" placeholder="VAD prevu femme enceinte"></p>
					<input type="text" name="rm0a23" id="mn" size="25" placeholder="VAD réalisée menage 0 a 23 mois"></p>
					<input type="text" name="rm24a59" id="pnm" size="25" placeholder="VAD réalisée ménage 24 a 59 mois"></p>
					<input type="text" name="rfe" id="nm" size="25" placeholder="VAD réalisée femme enceinte"></p>			
					<input type="text" name="e0a5" id="nnr" size="25" placeholder="Référence Enf 0 a 5 mois"></p>
					<input type="text" name="e6a11" id="nnv" size="25" placeholder="Référence Enf 6 a 11 mois"></p>
					<input type="text" name="e12a23" id="nm" size="25" placeholder="Référence Enf 12 a 23 mois"></p>
					<input type="text" name="e0a5m1" id="nnr" size="27" placeholder="Mens.Taille Enf 0 a 5 mesure (Z-1)"></p>
					<input type="text" name="e0a5m2" id="nnv" size="27" placeholder="Mens.Taille Enf 0 a 5 mesure (Z-2)"></p>
					<input type="text" name="e0a5m3" id="nnv" size="27" placeholder="Mens.Taille Enf 0 a 5 mesure (Z-3)"></p>
					<input type="text" name="e6a11m1" id="nnr" size="27" placeholder="Mens.Taille Enf 6 a 11 mesure (Z-1)"></p>
					<input type="text" name="e6a11m2" id="nnv" size="27" placeholder="Mens.Taille Enf 6 a 11 mesure (Z-2)"></p>
					<input type="text" name="e6a11m3" id="nnv" size="27" placeholder="Mens.Taille Enf 6 a 11 mesure (Z-3)"></p>
					<input type="text" name="e12a23m1" id="nnr" size="27" placeholder="Mens.Taille Enf 12 a 23 mesure (Z-1)"></p>
					<input type="text" name="e12a23m2" id="nnv" size="27" placeholder="Mens.Taille Enf 12 a 23 mesure (Z-2)"></p>
					<input type="text" name="e12a23m3" id="nnv" size="27" placeholder="Mens.Taille Enf 12 a 23 mesure (Z-3)"></p>
				</div>
				<div class="body-panel-body" id="quadro">
					<input type="text" name="e24a59m1" id="nnr" size="27" placeholder="Mens.Taille Enf 24 a 59 mesure (Z-1)"></p>
					<input type="text" name="e24a59m2" id="nnv" size="27" placeholder="Mens.Taille Enf 24 a 59 mesure (Z-2)"></p>
					<input type="text" name="e24a59m3" id="nnv" size="27" placeholder="Mens.Taille Enf 24 a 59 mesure (Z-3)"></p>
					<input type="text" name="zztr" id="nnr" size="27" placeholder="Comp. Alim Zazatomady reçue"></p>
					<input type="text" name="zztd" id="nnv" size="27" placeholder="Comp. Alim Zazatomady distribuée"></p>
					<input type="text" name="zzte" id="nm" size="27" placeholder="Enf 6 a 23 ayant reçue Zazatomady"></p>	<input type="text" name="am0a5" id="nnr" size="27" placeholder="All Mate Enf 0 a 5 mois allaité aux seins"></p>
					<input type="text" name="am6a11" id="nnv" size="27" placeholder="All Mate Enf 6 a 11 mois allaité aux seins"></p>
					<input type="text" name="am12a23" id="nm" size="27" placeholder="All Mate Enf 12 a 23 mois allaité aux seins"></p>
					<input type="text" name="amba" id="nnr" size="27" placeholder="Bénéficiaire AGR"></p>
					<input type="text" name="ageo" id="nnv" size="27" placeholder="AGR encore Opérationnelle"></p>
					<input type="text" name="agoed" id="nm" size="27" placeholder="AGR Opérationnelle + extension/diversification"></p>			
					<input type="text" name="aba" id="nnr" size="27" placeholder="ACN Bénéficiaire AGR"></p>
					<input type="text" name="aageo" id="nnv" size="27" placeholder="AGR ACN Opérationnelle"></p>
					<input type="text" name="aagoed" id="nm" size="27" placeholder="AGR ACN Opérat + extension/diversification"></p>
					<input type="text" name="d0a5" id="nnr" size="27" placeholder="Démos culinaire réaliser 0 a 5 mois"></p>
					<input type="text" name="d6a11" id="nnv" size="27" placeholder="Démos culinaire réaliser 6 a 11 mois"></p>
					<input type="text" name="d12a23" id="nm" size="27" placeholder="Démos culinaire réaliser 12 a 23 mois"></p>
					<input type="text" name="d24a59" id="nm" size="27" placeholder="Démos culinaire réaliser 24 a 59 mois"></p>
				</div>	
			</div>			
			<button id="btn" class="buttom">Enregistrer</button>
		</form>
	</div>
</body>
</html>