<?php

class Fichier
{

    public function setform(){
         global $dbh;
         $idFichier = $_GET['url_fichier'];
         $query = $dbh->prepare("SELECT url_fichier FROM fichier WHERE id_fichier = :id_fichier");
         $query->execute(array(
            "id_fichier"=>$idFichier
         ));
         return $query->fetch();
   }

  }
