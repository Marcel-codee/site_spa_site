<?php
use App\modeles\ModeleClasse;

try {
    $client = [];
    $requ = ModeleClasse::getall("service_detient_client");

    foreach ($requ as $data) :
        $clients =  ModeleClasse::getone($data['idclient'],"client");
        $service = ModeleClasse::getone($data['idservice'],"service");
        $objet=[
            "idclient"=>$clients['id'],
            "idservice"=>$service['id'],
            "nom"=>$clients['nom'],
            "prenom"=>$clients['prenom'],
            "photo"=>$clients['photo'],
            "telephone"=>$clients['telephone'],
            "email"=>$clients['email'],
            "status"=>$clients['status'],
            "titre"=>$service['titre']
        ];
        array_push($client, $objet);
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