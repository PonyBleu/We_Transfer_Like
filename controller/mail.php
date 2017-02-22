<?php 
var_dump('pouet');
if(isset($_POST['submit'])){
    $to = $_POST['maildest'];
    $from = $_POST['mail']; 
    $site = "Wetransfer Like <noreply@wetransferlike.com>";
    $subject = "$from vous a envoyé un fichier depuis Wetransfer Like !";
    $subject2 = "Copie de votre envoi depuis Wetransfer Like";
    $message = $from . " " . " vous a transmis un fichier, pour le télécharger <a href='http://romaneh.marmier.codeur.online/We_Transfer_Like/view/download.php?id_fichier=1'>cliquez ici</a> " . "\n\n" . $_POST['message'];
    $message2 = " Copie de votre message pour " . $to . "\n\n" . $_POST['message'];
    $headers = "From:" . $site;
    $headers2 = "From:" . $site;    
    $headers = "Content-type: text/html; charset=UTF-8";
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
  
    }
?>
