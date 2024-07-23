<?php

use App\modeles\ModeleClasse;


if (!empty($_GET['id'])) :

    //extraire id et stocker dans une variable $id
    extract($_GET);
    //verrifier si l'id contient le caratere "-" 
               try {

                $Requete = ModeleClasse::getoneByname('id','service',$id);
                $update = ModeleClasse::update('service', $_POST, $id);

                //apres suppression on retourne a la page __ services  pour voir le changement
                header('location:' . LINK . '__services');
            } catch (\Throwable $th) {
                //throw $th;
            }

           
endif;


if (!empty($_POST)) {
    // Téléchargement du fichier et obtention du chemin
    $imagePath = __files('photo');
    if ($imagePath) {
        $_POST['photo'] = $imagePath;
    }
    extract($_POST);

    try {
        // Ajout des données dans la base de données
        $ajout = ModeleClasse::add('client', $_POST);
    } catch (\Throwable $th) {
        // Gestion des erreurs
        echo "Erreur : " . $th->getMessage();
        die();
    }

    try {
        // Récupérer le dernier insert dans la table 'client'
        $q = ModeleClasse::getLastInsert('client');
        
        // Préparer les données pour la table 'detenir'
        $_POST = []; // Réinitialiser $_POST avant de l'utiliser à nouveau
        $_POST['idservice'] = $Requete['id'];
        $_POST['idclient'] = $q[0];

        try {
            $detenir = ModeleClasse::add('service_detient_client', $_POST);
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
            die();
        }
    } catch (\Throwable $th) {
        echo "Erreur : " . $th->getMessage();
        die();
    }
}




