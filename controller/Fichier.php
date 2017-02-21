<?php

class Fichier
{

    public function setform(){
     global $dbh;
     $get_id_fichier = $_GET['id_fichier'];
     $req = $dbh->prepare("SELECT url_fichier , id_fichier FROM fichier WHERE id_fichier = :id_fichier");
     $req->execute(array(
        "id_fichier"=>$get_id_fichier
     ));
     $result = $req->fetchAll(PDO::FETCH_ASSOC);
      // print_r($result);
      if ($get_id_fichier == "")
      {
        echo "Une erreur est survenu !";
      }else
        {
          echo "GG";
        }

   }

  }
