<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>ACTIVITE PNNC</title>
</head>
<body>
	<div class="jumbotron text-center"><?php require("entete.php") ;?></div>
      <div class="">
        <div class=""><?php require("tete.php") ?></div>
		<div class="panel-form">
			<form method="POST" action="ong.php">
				<div class="panel-form">
					<div class="panel-headding"><h3>ACTIVITE PNCC</h3>
						<div class="panel-body-body">
							<div class="body" aligne="center">
								<div class="body-panel-body" id="primo">
									<?php  require_once('ongbase.php');$lie="SELECT * FROM site ORDER BY NOMSITE";$li=$pdo->prepare($lie);$li->execute();?>
									<div class="form-group">
										<label class="control-label">Site PNNC</label>      
        	       						<select name="site" id="mod" class="form-control text-center"><option value="" disabled selected>Séléctionner une de Site PNNC</option><?php while($et=$li->fetch()) {;echo "<option value='".($et['NOMSITE'])."'>".utf8_encode($et['NOMSITE'])/*($et['CODECOMMUNE'])*/."</option>" ;};?> 
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Date </label><br>	
                						<input type="date" name="date" class="form-control text-center" required/>
									</div>
									<div class="form-group">
										<label class="control-label">Site fonctionnelle et opérationnelle</label><br>
										<input type="number" name="a1" id="a1" placeholder="Fonctionnelle et Opérationnelle"required/>
									</div>
                					<div class="form-group">
                						<label class="control-label">Site ayant rapport</label><br>
										<input type="number" name="a2" id="a2" placeholder="Ayant Rapport"required/>
									</div>
									<?php
									function comparaison($a1,$a2)
									{
										if ($a2<=$a1){
										}
										else
										{
										echo "Il y a une conflit de données dans Opérationnelle et ayant rapport";
										}
									return $a1;$a2;
									}	
									?>
									<div class="form-group">
										<label>Femmes enceinte récensée</label><br>
										<input type="number" name="a3" id="a"   placeholder="Femmes enceinte recensée" required/>
									</div>
									<div class="form-group">
										<label>Référé pour CPN</label><br>
										<input type="number" name="a4" id="a" placeholder="Référé pour CPN"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Participante à l'EN</label><br>
										<input type="number" name="a5" id="a"  placeholder="Participant à l'EN"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Accouchement sous assistant médical</label><br>
										<input type="number" name="a6" id="a"   placeholder="Accouchement sous assistant médical"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Nouveau nés récensés</label><br>
										<input type="number" name="a7" id="a" placeholder="Nouveau nés récensés"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Nouveau nés vivants</label><br>
										<input type="number" name="a8" id="a"  placeholder="Nouveau nés vivants"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mort en naissance</label><br>
										<input type="number" name="a9" id="a"   placeholder="Mort en naissance"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Poids de naissance moins de 2,5Kg</label><br>
										<input type="number" name="a10" id="a" placeholder="Poids naissance moin de 2,5Kg"required/>
									</div>
									<div class="form-group">
										<label>Taille de naissance moins de 46cm</label><br>
										<input type="number" name="a11" id="a"   placeholder="Taille de naissance moin de 46CM"required/>
									</div>
									<div class="form-group">
										<label>Enf 0-5 mois récensés</label><br>
										<input type="number" name="a12" id="a" placeholder="Enf 0 a 5 mois récensés"required/>
									</div>
									<div class="form-group">
										<label>Enf 6-11 mois récensés</label><br>
										<input type="number" name="a13" id="a" placeholder="Enf 6 a 11 mois récensés"required/>
									</div>
									<div class="form-group">
									<label>Enf 12-23 mois récensés</label><br>
										<input type="number" name="a14" id="a" placeholder="Enf 12 a 23 mois récensés"required/>
									</div>									
								</div>
								<div class="body-panel-body" id="condo">
									<div class="form-group">
										<label>Enf 24-59 mois récensés</label><br>
										<input type="text" name="a15" id="a" placeholder="Enf 24 a 59 mois récensées"required/>
									</div>
									<div class="form-group">
										<label>Enf 0-5 mois pésées (Z-1)</label><br>
										<input type="number" name="a16" id="a" placeholder="Enf 0 a 5 mois pesées (Z-1)"required/>
									</div>
									<div class="form-group">
										<label>Enf 6-11 mois pésées (Z-1)</label><br>
										<input type="number" name="a17" id="a" placeholder="Enf 6 a 11 mois pesées (Z-1)"required/>
									</div>
									<div class="form-group">
										<label>Enf 12-23 mois pésées (Z-1)</label><br>
										<input type="number" name="a18" id="a" placeholder="Enf 12 a 23 mois pesées (Z-1)"required/>
									</div>
									<div class="form-group">
										<label>Enf 24-59 mois pésées (Z-1)</label><br>
										<input type="number" name="a19" id="a" placeholder="Enf 24 a 59 mois pesées (Z-1)"required/>
									</div>
									<div class="form-group">
										<label>Enf 0-5 mois pésées (Z-2)</label><br>
										<input type="number" name="b1" id="a" placeholder="Enf 0 a 5 mois pesées (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-11 Pésées (Z-2)</label><br>
										<input type="number" name="b2" id="a" placeholder="Enf 6 a 11 mois pesées (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 12-23 mois pésées (Z-2)</label><br>
										<input type="number" name="b3" id="a" placeholder="Enf 12 a 23 mois pesées (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 24-59 mois pésée (Z-2)</label><br>
										<input type="number" name="b4" id="pae" placeholder="Enf 24 a 59 mois pesées (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 0-5 mois pésées (Z-3)</label><br>
										<input type="number" name="b5" id="a" placeholder="Enf 0 a 5 mois pesées (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-11 mois pésées (Z-3)</label><br>
										<input type="number" name="b6" id="a" placeholder="Enf 6 a 11 mois pesées (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 12-23 mois pésées (Z-3)</label><br>
										<input type="number" name="b7" id="a" placeholder="Enf 12 a 23 mois pesées (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 24-59 mois pésées (Z-3)</label><br>
										<input type="number" name="b8" id="rfr"  placeholder="Enf 24 a 59 mois pesées (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 mois récensées</label><br>
										<input type="number" name="b9" id="fe" placeholder="Enf 6 a 59 mois récensées"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 Mensuration MUAC/PB</label><br>
										<input type="number" name="b10" id="rfr" placeholder="Enf 6 a 59 mensuration en perimetre MUAC/PB"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 mois ayant PB<115mm</label><br>
										<input type="number" name="b11" id="pae" placeholder="Enf 6 a 59 ayant PB<115mm"required/>
									</div>															
								</div>
								<div class="body-panel-body" id="trio">
									<div class="form-group">
										<label class="control-label">Enf 6-59 ayant 115< PB<125 </label><br>
										<input type="number" name="b12" id="rfr" placeholder="Enf 6 a 59 ayant 115mm<PB<125mm"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 ayant PB<115mm+OEDEME</label><br>
										<input type="number" name="b13" id="rfr" placeholder="Enf 6 a 59 ayant PB<115mm+OEDEME"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 ayant 115mm< PB<125mm+OEDEME</label><br>
										<input type="number" name="b14" id="pae" placeholder="Enf 6 a 59 ayant 115mm<PB<125mm+OEDEME"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 mois référé CRENI</label><br>
										<input type="number" name="b15" id="rfr" placeholder="Enf 6 a 59 mois référé CRENI"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-59 mois référé CRENAS</label><br>
										<input type="number" name="b16" id="rfr" placeholder="Enf 6 a 59 mois référé CRENAS"required/>
									</div>
									<div class="form-group">
										<label class="control-label">EDN Mére 0-23 récensées</label><br>
										<input type="number" name="b17" id="nnr" placeholder="Educ.Nutr Mere 0 a 23 récensées"required/>
									</div>
									<div class="form-group">
										<label class="control-label">EDN Mére 2-59 récensées</label><br>
										<input type="number" name="b18" id="nm" placeholder="Educ.Nutr Mere 24 a 59 récensées"required/>
									</div>
									<div class="form-group">
										<label class="control-label">EDN Mére 0-23 participant à l'EN</label><br>
										<input type="number" name="b19" id="nnv" placeholder="Educ.Nutr Mere 0 a 23 Participant à l'EN"required/>
									</div>
									<div class="form-group">
										<label class="control-label">EDN Mére 24-59 participant à l'EN</label><br>
										<input type="number" name="c1" id="mn" placeholder="Educ.Nutr Mere 24 a 59 Participant à l'EN"required/>
									</div>				
									<div class="form-group">
										<label class="control-label">VAD prevu ménage 00-23 mois</label><br>
										<input type="number" name="c2" id="nnr" placeholder="VAD prevu ménage 0 a 23 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">VAD prevu ménage</label><br>
										<input type="number" name="c3" id="nnv" placeholder="VAD prevu ménage 24 a 59 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">VAD prevu femme enceinte</label><br>
										<input type="number" name="c4" id="nm" placeholder="VAD prevu femme enceinte">
									</div>
									<div class="form-group">
										<label class="control-label">VAD réaliser ménage 0-23 mois</label><br>
										<input type="number" name="c5" id="mn" placeholder="VAD réalisée menage 0 a 23 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">VAD réalisée ménage 24-59 mois</label><br>
										<input type="number" name="c6" id="pnm" placeholder="VAD réalisée ménage 24 a 59 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">VAD réalisée femme enceinte</label><br>
										<input type="number" name="c7" id="nm" placeholder="VAD réalisée femme enceinte"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Référence enf 0-5 mois</label><br>
										<input type="number" name="c8" id="nnr" placeholder="Référence Enf 0 a 5 mois"required/>
									</div>																			
								</div>
								<div class="body-panel-body" id="quadro">
									<div class="form-group">
										<label class="control-label">Référence enf 6-11 mois</label><br>
										<input type="number" name="c9" id="nnv" placeholder="Référence Enf 6 a 11 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Référence enf 12-23 mois</label><br>
										<input type="number" name="c10" id="nm" placeholder="Référence Enf 12 a 23 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Référence enf 24-59 mois</label><br>
										<input type="number" name="c11" id="nm" placeholder="Référence Enf 24 a 59 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 0-5 mesure (Z-1)</label><br>
										<input type="number" name="c12" id="nnr" placeholder="Mens.Taille Enf 0 a 5 mesure (Z-1)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 6-11 mesure (Z-1)</label><br>
										<input type="number" name="c13" id="nnv" placeholder="Mens.Taille Enf 6 a 11 mesure (Z-1)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 12-23 mesure (Z-1)</label><br>
										<input type="number" name="c14" id="nnv" placeholder="Mens.Taille Enf 12 a 23 mesure (Z-1)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 24-59 mesure (Z-1)</label><br>
										<input type="number" name="c15" id="nnr" placeholder="Mens.Taille Enf 24 a 59 mesure (Z-1)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 0-5 mesure (Z-2)</label><br>
										<input type="number" name="c16" id="nnv" placeholder="Mens.Taille Enf 0 a 5 mesure (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 6-11 mesure (Z-2)</label><br>
										<input type="number" name="c17" id="nnv" placeholder="Mens.Taille Enf 6 a 11 mesure (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 12-23 mesure (Z-2)</label><br>
										<input type="number" name="c18" id="nnr" placeholder="Mens.Taille Enf 12 a 23 mesure (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mens taille enf 24-59 mesure (Z-2)</label><br>
										<input type="number" name="c19" id="nnv" placeholder="Mens.Taille Enf 24 a 59 mesure (Z-2)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mes taille enf 0-5 mesure (Z-3)</label><br>
										<input type="number" name="c20" id="nnv" placeholder="Mens.Taille Enf 0 a 5 mesure (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mes taille enf 6-11 mesure (Z-3)</label><br>
										<input type="number" name="d1" id="nnr" placeholder="Mens.Taille Enf 6 a 11 mesure (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mes taille enf 12-23 mesure (Z-3)</label><br>
										<input type="number" name="d2" id="nnv" placeholder="Mens.Taille Enf 12 a 23 mesure (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mes taille enf 24-59 mesure (Z-3)</label><br>
										<input type="number" name="d3" id="nnv" placeholder="Mens.Taille Enf 24 a 59 mesure (Z-3)"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Zazatomady reçue</label><br>
										<input type="number" name="d4" id="nnr" placeholder="Comp. Alim Zazatomady reçue"required/>
									</div>														
								</div>
								<div class="body-panel-body" id="cinq">
									<div class="form-group">
										<label class="control-label">Zazatomady distribuée</label><br>
										<input type="number" name="d5" id="nnv" placeholder="Comp. Alim Zazatomady distribuée"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-23 ayant reçue zazatomady</label><br>
										<input type="number" name="d6" id="nm" placeholder="Enf 6 a 23 ayant reçue Zazatomady"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 0-5 mois allaité à sa mére</label><br>
										<input type="number" name="d7" id="nnr" placeholder="All Mate Enf 0 a 5 mois allaité aux seins"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 6-11 mois allaité à sa mére</label><br>
										<input type="number" name="d8" id="nnv" placeholder="All Mate Enf 6 a 11 mois allaité aux seins"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Enf 12-23 mois allaité à sa mére</label><br>
										<input type="number" name="d9" id="nm" placeholder="All Mate Enf 12 a 23 mois allaité aux seins"required/>
									</div>
									<div class="form-group">
										<label class="control-label">Mére bénéficaire AGR</label><br>
										<input type="number" name="d10" id="nnr" placeholder="Bénéficiaire AGR"required/>
									</div>
									<div class="form-group">
										<label class="control-label">AGR encore opérationnelle</label><br>
										<input type="number" name="d11" id="nnv" placeholder="AGR encore Opérationnelle"required/>
									</div>
									<div class="form-group">
										<label class="control-label">AGR Opérationnelle+extension</label><br>
										<input type="number" name="d12" id="nm" placeholder="AGR Opérationnelle + extension/diversification"required/>
									</div>
									<div class="form-group">
										<label class="control-label">ACN bénéficiare AGR</label><br>
										<input type="number" name="d13" id="nnr" size="27" placeholder="ACN Bénéficiaire AGR"required/>
									</div>
									<div class="form-group">
										<label class="control-label">AGR ACN opérationnelle</label><br>
										<input type="number" name="d14" id="nnv" placeholder="AGR ACN Opérationnelle"required/>
									</div>
									<div class="form-group">
										<label class="control-label">AGR ACN opérationnelle+extension</label><br>
										<input type="number" name="d15" id="nm" placeholder="AGR ACN Opérat + extension/diversification"required/>
									</div>
									<div class="form-group">
										<label class="control-label">DC réaliser 0-5 mois</label><br>
										<input type="number" name="d16" id="nnr" placeholder="Démos culinaire réaliser 0 a 5 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">DC réaliser 6-11 mois</label><br>
										<input type="number" name="d17" id="nnv" placeholder="Démos culinaire réaliser 6 a 11 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">DC réaliser 12-23 mois</label><br>
										<input type="number" name="d18" id="nm" placeholder="Démos culinaire réaliser 12 a 23 mois"required/>
									</div>
									<div class="form-group">
										<label class="control-label">DC réaliser 24-59 mois</label><br>
										<input type="number" name="d19" id="nm" placeholder="Démos culinaire réaliser 24 a 59 mois"required/>
									</div>
									<div  class="btn-block">
										<button  id="btn-action" class="buttom">ENREGISTRER</button>
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
</html>