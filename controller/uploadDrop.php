<?php
require_once('../model/PDO.php');
require_once('Fichier.php');
$fichier = new Fichier();

header('content-type: application/json');

$h = getallheaders();
$o = new stdClass();
$source = file_get_contents('php://input');
$type = Array('image/png', 'image/gif', 'image/jpeg');         // permet de définir le type de fichier accepté



if(!in_array($h['x-file-type'],$type)){
    $o->error = 'Format non supporté';
}else{
    file_put_contents("../data/".$h['x-file-name'],$source);
    $o->name = $h['x-file-name'];
    $o->content = '<div class="unlink">
    <p>Vous venez d\'inserer '.$h['x-file-name'].'</p><button class="supression" onclick="supr()" alt="image en forme de croix">Suprimer</button>
    </div>';
}

echo json_encode($o);
