<?php
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
    $o->content = '<p>Vous venez d\'inserer '.$h['x-file-name'].'</p>';
}

echo json_encode($o);






// print_r($h);
// echo('<br />');
// print_r($source);
// file_put_contents("../data/".$h['x-file-name'],$source);
