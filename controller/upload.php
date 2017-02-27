<?php

require_once('../model/PDO.php');
if(isset($_POST['submit'])){

    $uploaddir = '../data/';
    $file = date('YmdHis').basename($_FILES['monFichier']['name']);
    $file = strtr($file, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    $file = preg_replace('/([^.a-z0-9]+)/i', '-', $file);
    $uploadfile = $uploaddir.date('YmdHis').basename($_FILES['monFichier']['name']);
    $fileType = pathinfo($uploadfile,PATHINFO_EXTENSION);
    $changePhp = ".exept";
    $lienServeur = "http://romaneh.marmier.codeur.online/We_Transfer_Like/data/";
    $changementPhp = $uploaddir.date('YmdHis').$file.$changePhp;
    $retour = "http://romaneh.marmier.codeur.online/We_Transfer_Like/index.php";


    if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadfile)){
         if($fileType =="php"){
            rename($uploadfile, $changementPhp);
            var_dump($changementPhp);
            $query = $dbh->prepare("INSERT INTO fichier (url_fichier , email_envoyeur , email_receveur) VALUES (:url_fichier , :receveur , :envoyeur)");
                $query->execute(array(
                   "url_fichier"=>$changementPhp ,
                   "receveur"=>$_POST['maildest'],
                   "envoyeur"=>$_POST['mail']
                ));

            $lastIdFichier = intval($dbh->lastInsertId());
            var_dump($lastIdFichier);
            echo "Le fichier est valide, et a été téléchargé avec succès.";
            echo "<a href='$retour'><button type='button'>Retour</button></a>";
            include('mail.php');
        }else{
            $query = $dbh->prepare("INSERT INTO fichier (url_fichier , email_envoyeur , email_receveur ) VALUES (:url_fichier , :receveur , :envoyeur)");
                $query->execute(array(
                   "url_fichier"=>$lienServeur.$file,
                   "receveur"=>$_POST['maildest'],
                   "envoyeur"=>$_POST['mail']
                ));

            $lastIdFichier = intval($dbh->lastInsertId());
            var_dump($lastIdFichier);
                echo "Le fichier est valide, et a été téléchargé avec succès.";
                echo "<a href='$retour'><button type='button'>Retour</button></a>";
                include('mail.php');
        }
    }else {
        echo "Y'a eu un problème quelque part. L'upload n'a pas fonctionné";
        echo "<a href='$retour'><button type='button'>Retour</button></a>";
    }
}
