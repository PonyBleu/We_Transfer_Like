<?php

$h = getallheaders();
$source = file_get_contents('php://input');

print_r($h);
echo('<br />');
print_r($source);
file_put_contents("../data/".$h['x-file-name'],$source);
