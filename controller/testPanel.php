<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}




$titre = "Test Panel";
include "$racine/vue/header.php";
include "$racine/vue/vueTestPanel.php";
include "$racine/vue/footer.php";