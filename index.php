<?php
session_start();
$page = "index.php";

define('WEBROOT', str_replace($page, '', $_SERVER['SCRIPT_NAME']));

require_once('model/PDO.php');
require_once('controller/Fichier.php');
$fichier = new Fichier();
    $page = "view/index.php";


    if (isset($_GET['page'])) {
        $page = "view/".$_GET['page'].".php";
    }



include("view/template/index.php");

define('WEBROOT', str_replace($page, '', $_SERVER['SCRIPT_NAME']));

require_once('model/PDO.php');
require_once('controller/Fichier.php');
$fichier = new Fichier();
    $page = "view/index.php";


    if (isset($_GET['page'])) {
        $page = "view/".$_GET['page'].".php";
    }



include("view/template/index.php");

define('WEBROOT', str_replace($page, '', $_SERVER['SCRIPT_NAME']));

require_once('model/PDO.php');
require_once('controller/Fichier.php');
$fichier = new Fichier();
    $page = "view/index.php";
    $fichier = new Fichier();


    if (isset($_GET['page'])) {
        $page = "view/".$_GET['page'].".php";
    }



include("view/template/index.php");
