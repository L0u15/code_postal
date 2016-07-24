<?php
function formVille($idName) {
    $file = file('data/cp.csv');
    $tab_ville = array();
    foreach ($file as $line) {
        list($nom, $cp, $secteur) = explode(";", $line);
        $tab_ville[] = array($nom, $cp, $secteur);
    }
    echo "<select id=$idName><option></option>";
    
    foreach ($tab_ville as $ville) {
        echo "<option value=$ville[2]>$ville[0]</option>";
    }
    echo "</select>";
}
