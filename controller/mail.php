<?php 

if(isset($_POST['submit'])){
    $to = $_POST['maildest'];
    $from = $_POST['mail'];
    $name = $_POST['nom'];
    $site = "Wetransfer Like <noreply@wetransferlike.com>";
    $subject = "$from vous a envoyé un fichier depuis Wetransfer Like !";
    $subject2 = "Copie de votre envoi depuis Wetransfer Like";
    $message = "<span style='color : #003752'><span style='font-size : 30px'>Wetransfer Like</span></span>" . "<br><br>" .$name . "<br>" . $from . "<br>" . "<span style='color : #0078b8'><span style='font-family : Helvetica'> Vous a transmis un fichier, pour le télécharger </span></span><a href='http://romaneh.marmier.codeur.online/We_Transfer_Like/index.php?page=download&url_fichier=$lastIdFichier'><span style='color : #003752'><span style ='font-size : 20px'>cliquez ici</span></span></a> " . "\n\n" . $_POST['message'];
    $message2 = "<span style='color : #003752'><span style='font-size : 30px'>Wetransfer Like</span></span>" . "<br><br>" . "Copie de votre message pour : " . "<br>" . $name . "<br>" . $_POST['message'] . "<span style='color : #0078b8'><span style='font-family : Helvetica'> Vous avez transmis un fichier, pour le télécharger </span></span><a href='http://romaneh.marmier.codeur.online/We_Transfer_Like/index.php?page=download&url_fichier=$lastIdFichier'><span style='color : #003752'><span style ='font-size : 20px'>cliquez ici</span></span></a> ";
    $headers = "From: \"Wetransfer Like\"<noreply@wetransferlike.com>\n";
    $headers .= "Content-Type: text/html; charset=\"utf-8\"";
    $headers2 = "From:" . $site;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers);

    }
?>
