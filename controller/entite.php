<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

$titre = "Entitées";
include "$racine/vue/header.php";
include "$racine/vue/vueEntite.php";
include "$racine/vue/footer.php";