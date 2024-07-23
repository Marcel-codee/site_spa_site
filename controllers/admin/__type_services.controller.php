<?php

use App\modeles\ModeleClasse;

if (empty($_GET['id'])) :
    if(!empty($_POST)):
        extract($_POST);
        
        try {
            $ajout=ModeleClasse::add(' type_service',$_POST);
        } catch (\Throwable $th) {
            //throw $th;
        }
    endif;
endif;

try {
    $response = [];
    $req = ModeleClasse::getall(' type_service');

    foreach ($req as $data) :
        array_push($response, $data);
    endforeach;
} catch (\Throwable $th) {
    //throw $th;
}
// verrifier si il existe un id

if (!empty($_GET['id'])) :

    //extraire id et stocker dans une variable $id
    extract($_GET);
    //verrifier si l'id contient le caratere "-" 
    if (str_contains($id, '-')) :

        //explode nous retourne un array c'est a dir un tableau d'elements
        $explode = explode('-', $id);
        //deb($explode);
        //on prends le deuxieme element (qui est l'id) de $explode pour stocker dans la variable $ID
        $ID = $explode[1];

        //verrifier si l'id contient le mot edit 
        if (str_contains($id, 'edit')) :

            try {

                $Requete = ModeleClasse::getoneByname('id',' type_service',$ID);
                $update = ModeleClasse::update(' type_service', $_POST, $ID);

                //apres suppression on retourne a la page __ type_services  pour voir le changement
                header('location:' . LINK . '__type_services');
            } catch (\Throwable $th) {
                //throw $th;
            }
        elseif (str_contains($id, 'delete')) :
                
            try {
               
                $del = ModeleClasse::changeStatus('type_service',0,$ID);
                header('location:' . LINK . '__type_services');
            } catch (\Throwable $th) {
                //throw $th;
                echo $th->getMessage();die();
            }

        endif;
    endif;
endif;


$extract=extract($_GET);
// deb($extract);
// try {
//     $Requete=ModeleClasse::getoneByname('libelle',' typeservice',$value);
// } catch (\Throwable $th) {
//     //throw $th;
// }