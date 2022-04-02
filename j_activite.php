<?php require_once("ajout/ongbase.php");
    
    $si="SELECT * FROM commune ORDER BY code_district";
    $st=$pdo->prepare($si);
    $st->execute();

    $comm="SELECT * FROM district ORDER BY code_region";
    $com=$pdo->prepare($comm);
    $com->execute();

    $rq="SELECT * FROM REGION ";
    $nm=$pdo->prepare($rq);
    $nm->execute();

    $dis="SELECT *  FROM region ORDER BY code_province";
    $di=$pdo->prepare($dis);
    $di->execute();
    
    $reg="SELECT * FROM PROVINCE";
    $re=$pdo->prepare($reg);
    $re->execute();
  ?>
<!DOCTYPE html>
  <html>
  <head> 
    <meta charset="utf-8" lang="fr"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/verif.js"></script>
    <script type="text/javascript" src="js/jquery-validate.js"></script>
    <title>JOURNAL SITE</title>
</head>
<body>
<div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("complement/entete2.php") ?></div>
    <div class="container row">
      <div class="col-sm-3 col-md-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <?php require("../complement/pub.jsx");?>
          </div>
        </div>
      </div>
      <div class="col-md-8"><?php require("complement/entete2.php") ?>
        <div class="panel-form">
    </div>
  </body>
  </html>
