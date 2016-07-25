<?php


//get the parameter from URL
$index = $_REQUEST["a"];

$file = file('data/cmp.csv');
//    $tab = array();
//    foreach ($file as $line) {
//        list($nom, $secteur) = explode(";", $line);
//        $tab[] = array($nom, $secteur);
//    }
//$info =$file[$index];
list($ville, $adresse, $tel, $map) = explode(";", $file[$index]);

$content="<h2>CMP : $ville</h2><p>Adresse : $adresse</p><p>Téléphone :$tel</p><p>Plan : </p>$map";
//$content.="$map";
//$content.=$file[$index];
echo $content;