<?php
use App\modeles\ModeleClasse;

try {
    $client = [];
    $requ = ModeleClasse::getAllJoin3('client','service','service_detient_client','idservice','idclient');

    
    foreach ($requ as $data) :
        array_push($client, $data);
    endforeach;
    
} catch (\Throwable $th) {
    //throw $th;
    echo $th-> getMessage();die();
}


if (!empty($_GET['id'])) {
    if (!empty($_POST)) {
        // Téléchargement du fichier et obtention du chemin
        extract($_POST);
        try {
          
            // Ajout des données dans la base de données
           ModeleClasse::changeStatus('service_detient_client',2,$id);
            header('location:' . LINK . '__client');
        } catch (\Throwable $th) {
            // Gestion des erreurs
            echo "Erreur : " . $th->getMessage();die();
        }
    }
}