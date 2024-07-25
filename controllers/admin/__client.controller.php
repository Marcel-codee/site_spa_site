<?php
use App\modeles\ModeleClasse;

try {
    $client = [];
    $requ = ModeleClasse::getallAsc("service_detient_client",'status');

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
            "status"=>$data['status'],
            "titre"=>$service['titre']
        ];
        array_push($client, $objet);
    endforeach;
} catch (\Throwable $th) {
    //throw $th;
    echo $th-> getMessage();die();
}


if (!empty($_GET['id'])) {
    extract($_GET);
    if (str_contains($id, '-')) :

        //explode nous retourne un array c'est a dir un tableau d'elements
        $explode = explode('-', $id);
        //deb($explode);
        //on prends le deuxieme element (qui est l'id) de $explode pour stocker dans la variable $ID
        $idservice = $explode[0];
        $idclient = $explode[1];
        try {
          
            global $connect;
            $query = "UPDATE `service_detient_client` SET `status` = '2' WHERE `service_detient_client`.`idservice` = ".$idservice." AND `service_detient_client`.`idclient` = ".$idclient;
            $connect->query($query);
            header('location:' . LINK . '__client');
        } catch (\Throwable $th) {
            // Gestion des erreurs
            echo "Erreur : " . $th->getMessage();die();
        }
    endif;
}