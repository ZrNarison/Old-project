<?php 
	require_once("ongbase.php");

		$a =$_POST['site'];
		$b =$_POST['date'];
		$d =$_POST["a1"];
		$e =$_POST["a2"];
		$f =$_POST["a3"];
		$g =$_POST["a4"];
		$h =$_POST["a5"];
		$i =$_POST["a6"];
		$j =$_POST["a7"];
		$k =$_POST["a8"];
		$l =$_POST["a9"];
		$m =$_POST["a10"];
		$n =$_POST["a11"];
		$o =$_POST["a12"];
		$p =$_POST["a13"];
		$q =$_POST["a14"];
		$r =$_POST["a15"];
		$s =$_POST["a16"];
		$t =$_POST["a17"];
		$u =$_POST["a18"];
		$v =$_POST["a19"];

		$w =$_POST["b1"];
		$x =$_POST["b2"];
		$y =$_POST["b3"];
		$z =$_POST["b4"];
		$aa =$_POST["b5"];
		$ab =$_POST["b6"];
		$ac =$_POST["b7"];
		$ad =$_POST["b8"];
		$ae =$_POST["b9"];
		$af =$_POST["b10"];
		$ag =$_POST["b11"];
		$ah =$_POST["b12"];
		$ai =$_POST["b13"];
		$aj =$_POST["b14"];
		$ak =$_POST["b15"];
		$al =$_POST["b16"];
		$am =$_POST["b17"];
		$an =$_POST["b18"];
		$ao =$_POST["b19"];

		$ap =$_POST["c1"];
		$aq =$_POST["c2"];
		$ar =$_POST["c3"];
		$as =$_POST["c4"];
		$at =$_POST["c5"];
		$au =$_POST["c6"];
		$av =$_POST["c7"];
		$aw =$_POST["c8"];
		$ax =$_POST["c9"];
		$ay =$_POST["c10"];
		$az =$_POST["c11"];
		$ba =$_POST["c12"];
		$bb =$_POST["c13"];
		$bc =$_POST["c14"];
		$bd =$_POST["c15"];
		$be =$_POST["c16"];
		$bf =$_POST["c17"];
		$bg =$_POST["c18"];
		$bh =$_POST["c19"];
		$bhh =$_POST["c20"];

		$bi =$_POST["d1"];
		$bj =$_POST["d2"];
		$bk =$_POST["d3"];
		$bl =$_POST["d4"];
		$bm =$_POST["d5"];
		$bn =$_POST["d6"];
		$bo =$_POST["d7"];
		$bp =$_POST["d8"];
		$bq =$_POST["d9"];
		$br =$_POST["d10"];
		$bs =$_POST["d11"];
		$bt =$_POST["d12"];
		$bu =$_POST["d13"];
		$ca =$_POST["d14"];
		$cb =$_POST["d15"];
		$cc =$_POST["d16"];
		$cd =$_POST["d17"];
		$ce =$_POST["d18"];
		$cf =$_POST["d19"];

$ajout=$pdo->prepare("INSERT INTO activite(
	
	CODESITE,
	dateactivite,
	OPER_FONC,
	AYANTRAPPORT,
	FMENCEINTE_RECENSE,
	FMENCEINTE_CPN,
	FMENCEINTE_EN,
	FMENCEINTE_ACCOUC_MEDI,
	NAISSANCE_NOUV_NAIS_RECENSE,
	NAISSANCE_NAIS_VIV,
	NAISSANCE_MORT_NAIS,
	NAISSANCE_PDS_MOINS,
	NAISSANCE_TAILLE_NAIS_MOINS,
	ENF_0a5_RCS,ENF_6a11_RCS,
	ENF_12a23_RCS,
	ENF_24a59_RCS,
	ENF_0a5_PS_Z1,
	ENF_6a11_PS_Z1,
	ENF_12a23_PS_Z1,ENF_24a59_PS_Z1,

	ENF_0a5_PS_Z2,
	ENF_6a11_PS_Z2,
	ENF_12a23_PS_Z2,
	ENF_24a59_PS_Z2,
	ENF_0a5_PS_Z3,
	ENF_6a11_PS_Z3,
	ENF_12a23_PS_Z3,
	ENF_24a59_PS_Z3,
	ENF_6a59_MOIS_RCS,
	ENF_6a59_MuacPB,
	ENF_6a59_MOIS_PB115,
	ENF_6a59_MOIS_PB125,
	ENF_6a59_MOIS_PB115OEDM,
	ENF_6a59_MOIS_PB125OEDM,
	ENF_6a59_MOIS_RFR_CRENI,
	ENF_6a59_MOIS_RFR_CRENAS,
	EDC_NUTR_MR_0a23_RCS,
	EDC_NUTR_MR_24a59_RCS,
	EDC_NUTR_MR_0a23_EN,

	EDC_NUTR_MR_24a59_EN,
	VAD_PRV_MNG_0a23,
	VAD_PRV_MNG_24a59,
	VAD_FM_ENCEINTE,
	VAD_RLS_MNG_0a23,
	VAD_RLS_MNG_24a59,
	VAD_RLS_FM_ENCEINTE,
	RFR_ENF_0a5_RFR,
	RFR_ENF_6a11_RFR,
	RFR_ENF_12a23_RFR,
	RFR_ENF_24a59_RFR,
	MENS_TAILLE_ENF_0a5_Z1,
	MENS_TAILLE_ENF_6a11_Z1,
	MENS_TAILLE_ENF_12a23_Z1,
	MENS_TAILLE_ENF_24a59_Z1,
	MENS_TAILLE_ENF_0a5_Z2,
	MENS_TAILLE_ENF_6a11_Z2,
	MENS_TAILLE_ENF_12a23_Z2,
	MENS_TAILLE_ENF_24a59_Z2,
	MENS_TAILLE_ENF_0a5_Z3,

	
	MENS_TAILLE_ENF_6a11_Z3,
	MENS_TAILLE_ENF_12a23_Z3,
	MENS_TAILLE_ENF_24a59_Z3,
	ZZT_RECUE,
	ZZT_DISTR,
	ENF_6a23_REC_ZZT,
	ALL_MAT_0a5,
	ALL_MAT_6a11,
	ALL_MAT_12a23,
	AGR_MNG_MNG_BNF_AGR,
	AGR_MNG_AGR_OP,
	AGR_MNG_OP_EXT_DIV,
	ACN_MNG_ACN_BNF_AGR,
	ACN_MNG_ACN_OP,
	ACR_MNG_OP_EXT_DIV,
	DC_ENF_0a5,
	DC_ENF_6a11,
	DC_ENF_12a23,
	DC_ENF_24a59
	)
	VALUES(
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,

	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,

	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	

	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?,
	?

	)");
$act=array(
	$a,
	$b,
	$d,
	$e,
	$f,
	$g,
	$h,
	$i,
	$j,
	$k,
	$l,
	$m,
	$n,
	$o,
	$p,
	$q,
	$r,
	$s,
	$t,
	$u,
	$v,

	$w,
	$x,
	$y,
	$z,
	$aa,
	$ab,
	$ac,
	$ad,
	$ae,
	$af,
	$ag,
	$ah,
	$ai,
	$aj,
	$ak,
	$al,
	$am,
	$an,
	$ao,

	$ap,
	$aq,
	$ar,
	$as,
	$at,
	$au,
	$av,
	$aw,
	$ax,
	$ay,
	$az,
	$ba,
	$bb,
	$bc,
	$bd,
	$be,
	$bf,
	$bg,
	$bh,
	$bhh,

	$bi,
	$bj,
	$bk,
	$bl,
	$bm,
	$bn,
	$bo,
	$bp,
	$bq,
	$br,
	$bs,
	$bt,
	$bu,
	$ca,
	$cb,
	$cc,
	$cd,
	$ce,
	$cf

);$ajout->execute($act);
	header("location:activite.php");
 ?>