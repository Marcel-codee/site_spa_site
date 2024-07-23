<?php

use App\modeles\ModeleClasse;
try {
    $typeService = [];
    $requ = ModeleClasse::getall('type_service');

    foreach ($requ as $data) :
        array_push($typeService, $data);
    endforeach;
    
} catch (\Throwable $th) {
    //throw $th;
}

try {
    $service = [];
    $requ = ModeleClasse::getall('service');

    foreach ($requ as $data) :
        array_push($service, $data);
    endforeach;
    
} catch (\Throwable $th) {
    //throw $th;
}

if (empty($_GET['id'])) {
    if (!empty($_POST)) {
        // Téléchargement du fichier et obtention du chemin
        $imagePath = __files('image');
        if ($imagePath) {
            $_POST['image'] = $imagePath;
        }
        $filePath = __files('fichier');
        if ($filePath) {
            $_POST['fichier'] = $filePath;
        }
        unset($_POST['_wysihtml5_mode']);
        extract($_POST);
        try {
            // Ajout des données dans la base de données
            $ajout = ModeleClasse::add('service', $_POST);
            header('location:'.LINK.'__services');
        } catch (\Throwable $th) {
            // Gestion des erreurs
            echo "Erreur : " . $th->getMessage();die();
            die();die();
        }
    }
}


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

                $Requete = ModeleClasse::getoneByname('id','service',$ID);
                $update = ModeleClasse::update('service', $_POST, $ID);

                //apres suppression on retourne a la page __ services  pour voir le changement
                header('location:' . LINK . '__services');
            } catch (\Throwable $th) {
                //throw $th;
            }
        elseif (str_contains($id, 'delete')) :
                
            try {
               
                $del = ModeleClasse::changeStatus('service',0,$ID);
                header('location:' . LINK . '__services');
            } catch (\Throwable $th) {
                //throw $th;
                echo $th->getMessage();die();
            }

        endif;
    endif;
endif;



