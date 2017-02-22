<?php
include "../model/PDO.php";
include "../controller/Fichier.php";
$new = new Fichier($dbh);

$new->setform();
?>
