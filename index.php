<?php
include 'lib/includes.php';
include 'lib/tab_ville.php';
?>
<html>
    <head>
        <title>Code postal</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/affichage_info.js" type="text/javascript"></script>
        <script src="js/searchme.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="arr_plan"></div>
        <?php
        formVille('ville');
        ?>
        <p class="ouvrir_f">Ouvrir</p>
        <div id="f_modale">
            <span class="fermer">Fermer</span>
            <h2 class="titre">CMP d'Auchel</h2>
            <p class="secteur">Secteur de Lillers</p>
            <p class="adresse">45 rue national ,62999 Auchel</p>
            <p class="telephone">0321454545</p>
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40596.06129435303!2d2.430465739588637!3d50.51084373083253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd1a5e576b19e1%3A0x40af13e81640200!2s62260+Auchel!5e0!3m2!1sfr!2sfr!4v1469191505618" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        <div id="result"></div>
        <form>
            <input type="text" onkeyup="searchme(this.value)">
        </form>
        <p>Resultats : <span id="src"></span></p>
    <script type="text/javascript">
            function searchme(str) {
                if (str.length == 0) {
                    document.getElementById("src").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("src").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "search.php?a=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </body>
</html>

<?php
//$tab=array('lille'=>59,'arras'=>62);
?>