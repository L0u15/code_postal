<?php
function getTab(){
    $file = file('data/cp_secteur.csv');
    $tab = array();
    foreach ($file as $line) {
        list($nom, $secteur) = explode(";", $line);
        $tab[] = array($nom, $secteur);
    }
    return $tab;
}
function optionVille() {
    $tabVille = getTab();
    echo "<option value='#'selected='selected' >Selectionnez votre ville...</option>";
    foreach ($tabVille as $ville) {
        echo "<option value=$ville[1]>$ville[0]</option>";
    }
}

//function formVille($idName) {
//    $file = file('data/cp_secteur.csv');
//    $tab_ville = array();
//    foreach ($file as $line) {
//        list($nom, $secteur) = explode(";", $line);
//        $tab_ville[] = array($nom, $secteur);
//    }
//    echo "<select id=$idName><option></option>";
//
//    foreach ($tab_ville as $ville) {
//        echo "<option value=$ville[1]>$ville[0]</option>";
//    }
//    echo "</select>";
//}
