<?php
if(isset($_POST['submit'])){

    $uploaddir = '../data/';
    $file = basename($_FILES['monFichier']['name']);
    $uploadfile = $uploaddir . basename($_FILES['monFichier']['name']);
    $fileType = pathinfo($uploadfile,PATHINFO_EXTENSION);
    $changePhp = ".exept";
    $changementPhp = $uploaddir.date('YmdHis').$file.$changePhp;

    if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadfile)) {
        if($fileType =="php"){
            rename($uploadfile, $changementPhp);
            echo "Le fichier est valide, et a été téléchargé avec succès.";

        }else{

        }
    }else {
        echo "Y'a eu un problème quelque part. L'upload n'a pas fonctionné";
    }
