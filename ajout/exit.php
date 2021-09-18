<?php
require_once("ongbase.php");
$az="Bonjour ma chere maman de que je sui 1 ans";
var_dump($az);//fanisana
echo("/");
echo(strlen($az)."caractére");//fanisana caractere du texte
echo("/");
echo(str_word_count($az));//fanisaana mot du texte
echo("/");
echo(strrev($az));//Orientation du texte
echo("/");
strpos($az,"ma");//connaitre la position du texte
echo("/");
$a=20;
$b=6;
echo ($a%$b);//cherche la reste de la division
echo("/");
echo ($a/=$b);//cherche la reste de la division
?>