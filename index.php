
<?php
include 'lib/tab_ville.php';
?>
<html>
    <head>
        <title>Code postal</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/affichageinfoCMP.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="arr_plan"></div>
        <select id="ville" onchange="afficheCMP(this.value)">
            <?php
            optionVille();
            ?>
        </select>
        <div id="f_modale">
            <span class="fermer">Fermer</span>
            <div id="contentCMP"></div>
        </div>
    </body>
</html>