<?php
if(isset($_POST['submit'])){
    $uploaddir = '../view/data/';
    $uploadfile = $uploaddir . basename($_FILES['monFichier']['name']);

    echo '<pre>';

        if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadfile)) {
            echo "Le fichier est valide, et a été téléchargé
                   avec succès.";
                   $fichier->setform();
                   include('mail.php');
        } else {
            echo "Y'a eu un problème quelque part. L'upload n'a pas fonctionné";
        }
}
