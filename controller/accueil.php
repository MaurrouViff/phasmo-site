<?php
if ($_SERVER["SCRIPT_FILENAME"] == __File__) {
    $racine = "..";
}



$titre = "Accueil";
include "$racine/vue/header.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/footer.php";