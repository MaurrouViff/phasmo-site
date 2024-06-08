<?php
include "getRacine.php";
include "$racine/controller/MainController.php";

$controller = new MainController();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "defaut";
}

$fichier = $controller->execute($action);
include "$racine/controller/$fichier";