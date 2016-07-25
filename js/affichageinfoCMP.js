//Recuperation des informations du CMP et actualisation de la fenetre modale
function searchContent($indexSector) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var reponse = xmlhttp.responseText;
            document.getElementById("contentCMP").innerHTML = reponse;
            document.getElementById("test").innerHTML = reponse;
        }
    };
    xmlhttp.open("GET", "content.php?a=" + $indexSector, true);
    xmlhttp.send();
}
//Rend visible l'element HTML passé en param
function affiche($element) {
    $($element).css("display", "block");
}
//Rend invisible l'element HTML passé en param
function cache($element) {
    $($element).css("display", "none");
}
//Affichage de la fenetre modale
function afficheCMP($indexCMP){
    if($indexCMP == '#'){
        return;
    }else{
        searchContent($indexCMP);
        affiche(".arr_plan, #f_modale");
        $(".arr_plan").animate({'opacity':'.5'},350);
        $("#f_modale").animate({'opacity':'1'},350);
    }
}
jQuery(function ($) {
        $(".fermer, .arr_plan").click(function () {
            cache(".arr_plan, #f_modale");
        });
    });