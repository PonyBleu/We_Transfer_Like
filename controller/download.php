<?php

class Fichier
{

  public function setform(){
    global $dbh;
    $count = $this->countFichier()+1;
    $req = $dbh->prepare("INSERT INTO fichier (url_fichier), (email_envoyeur), (email_receveur) VALUES (:url_fichier), (:email_envoyeur), (:email_receveur)");
    $req->execute(array(
      $url_fichier => "http://melanies.marmier.codeur.online/Fevrier/We_Transfer_Like/view/fichier".$nom;
    ));
  }

}
