function afficheFenetreModale($cmp) {

}
function setFenetre($cmp) {

}
function fenetreVisible() {
    $('#f_modale').css("display", "block");

}
function arrPlanVisible() {
    $('.arr_plan').css("display", "block");
}
function fenetreInvisible() {
    $('#f_modale').css("display", "none");
    $('.arr_plan').css("display", "none");
}
function affiche($element) {
    $($element).css("display", "block");
}
function cache($element) {
    $($element).css("display", "none");
}
(function ($) {
    jQuery(function ($) {
        $(".ouvrir_f").click(function () {
            affiche(".arr_plan, #f_modale");
        });
        $(".fermer, .arr_plan").click(function () {
            cache(".arr_plan, #f_modale");
        });
        $("#ville").change(function(){
            var villeSelect = $("#ville option:selected").text();
            $("#result").text(villeSelect);
        });
    });

})(jQuery);