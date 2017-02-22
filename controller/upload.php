<?php

require_once('../model/PDO.php');
if(isset($_POST['submit'])){

    $uploaddir = '../data/';
    $file = date('YmdHis').basename($_FILES['monFichier']['name']);
    $uploadfile = $uploaddir.date('YmdHis').basename($_FILES['monFichier']['name']);
    $fileType = pathinfo($uploadfile,PATHINFO_EXTENSION);
    $changePhp = ".exept";
    $changementPhp = $uploaddir.date('YmdHis').$file.$changePhp;
    $lienServeur = "http://romaneh.marmier.codeur.online/We_Transfer_Like/data/";

    var_dump($file);

    if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadfile)){
         if($fileType =="php"){
            rename($uploadfile, $changementPhp);
            var_dump($changementPhp);
            $query = $dbh->prepare("INSERT INTO fichier (url_fichier , email_envoyeur , email_receveur) VALUES (:url_fichier , :receveur , :envoyeur)");
                $query->execute(array(
                   "url_fichier"=>$lienServeur.$changementPhp ,
                   "receveur"=>$_POST['maildest'],
                   "envoyeur"=>$_POST['mail']
                ));
            echo "Le fichier est valide, et a été téléchargé avec succès.";
            include('mail.php');
        }else{
            $query = $dbh->prepare("INSERT INTO fichier (url_fichier , email_envoyeur , email_receveur ) VALUES (:url_fichier , :receveur , :envoyeur)");
                $query->execute(array(
                   "url_fichier"=>$lienServeur.$file,
                   "receveur"=>$_POST['maildest'],
                   "envoyeur"=>$_POST['mail']
                ));
                var_dump($lienServeur.$file);
                echo "Le fichier est valide, et a été téléchargé avec succès.";
                include('mail.php');
        }
    }else {
        echo "Y'a eu un problème quelque part. L'upload n'a pas fonctionné";
    }
}
