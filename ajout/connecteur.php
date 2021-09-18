<?php 

$reg="SELECT * FROM region Order By province";
$re=$pdo->prepare($reg);
$re->execute() ;
if (!isset($_GET["region1"])) 
        {        
          $query="SELECT * FROM district ORDER BY coderegion";
          $info=$pdo->prepare($query);
          $info->execute() ;           
        }
        else
        { 
          $f =$_GET['region1'];
          $query="SELECT * FROM district WHERE coderegion='".$f."'";
          $info=$pdo->prepare($query);
          $info->execute() ;   
        };
 /*if (!isset($_GET["codedistrict"])) 
 {
 	$req="SELECT * FROM district As dtr,commune As cmmn,
site As ste,activite As act ,
acn As cn , agr As gr,all_mat As al,
dc As cd, edn as dn,enf_0a5 As enf5,
enf_6a11 As enf11,enf_6a59 As enf9,
enf_12a23 As enf23,enf_24a59 As enf49,
femmes_enceintes As fe,mes_taille As mt,
naissance As nais,vad as vd,zazatom As zaz 
WHERE 
dtr.nomdistrict=cmmn.codedistrict AND cmmn.nomcommune=ste.codecommune AND 
ste.nomsite=act.codesite AND ste.nomsite=cn.code_site AND 
ste.nomsite=dn.code_site AND ste.nomsite=al.code_site AND 
ste.nomsite=cd.code_site AND ste.nomsite=dn.code_site AND 
ste.nomsite=enf5.code_site AND ste.nomsite=enf11.code_site AND 
ste.nomsite=enf9.code_site AND ste.nomsite=enf23.code_site AND 
ste.nomsite=enf49.code_site AND ste.nomsite=fe.code_site AND 
ste.nomsite=mt.code_site AND ste.nomsite=nais.code_site AND 
ste.nomsite=vd.code_site AND ste.nomsite=zaz.code_site";
    $rq=$pdo->prepare($req);
    $rq->execute();
 }
 else
 {
 	$req="SELECT * FROM district As dtr,commune As cmmn,
site As ste,activite As act ,
acn As cn , agr As gr,all_mat As al,
dc As cd, edn as dn,enf_0a5 As enf5,
enf_6a11 As enf11,enf_6a59 As enf9,
enf_12a23 As enf23,enf_24a59 As enf49,
femmes_enceintes As fe,mes_taille As mt,
naissance As nais,vad as vd,zazatom As zaz 
WHERE 
dtr.nomdistrict=cmmn.codedistrict AND cmmn.nomcommune=ste.codecommune AND 
ste.nomsite=act.codesite AND ste.nomsite=cn.code_site AND 
ste.nomsite=dn.code_site AND ste.nomsite=al.code_site AND 
ste.nomsite=cd.code_site AND ste.nomsite=dn.code_site AND 
ste.nomsite=enf5.code_site AND ste.nomsite=enf11.code_site AND 
ste.nomsite=enf9.code_site AND ste.nomsite=enf23.code_site AND 
ste.nomsite=enf49.code_site AND ste.nomsite=fe.code_site AND 
ste.nomsite=mt.code_site AND ste.nomsite=nais.code_site AND 
ste.nomsite=vd.code_site AND ste.nomsite=zaz.code_site";
    $rq=$pdo->prepare($req);
    $rq->execute();
 }

*/
    ?>