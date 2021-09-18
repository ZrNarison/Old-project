<?php
try{
  $Connection ='mysql://host=localhost;dbname=ongbase;port:3306';
  $ong = array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
  $pdo = new PDO ($Connection,'root','',$ong);
}
catch (PDOException $e){
    $msg ='Erreur PDO dans'. $e->getmessage();
    die ($msg);}
?>