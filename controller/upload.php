<?php
if(isset($_POST['submit'])){
    $uploaddir = '../view/images/';
    $uploadfile = $uploaddir . basename($_FILES['monFichier']['name']);

    echo '<pre>';

        if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadfile)) {
            echo "Le fichier est valide, et a été téléchargé
                   avec succès. Voici plus d'informations :\n";
        } else {
            echo "Attaque potentielle par téléchargement de fichiers.
                  Voici plus d'informations :\n";
        }
    print_r($_FILES['monFichier']['name']);
}
