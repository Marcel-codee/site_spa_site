<?php

// recuperation de l'entreprise

try {
    $TabEntreprise = [];
    $req = \App\modeles\ModeleClasse::getall('entreprise');
    foreach ($req as  $value) {

        array_push($TabEntreprise, $value);
    }

} catch (\Throwable $th) {
    //throw $th;
}

// afficher

try {
    $TabPresentaion = [];
    $req = \App\modeles\ModeleClasse::getall('presentation');
    foreach ($req as  $value) {
        array_push($TabPresentaion, $value);
    }

} catch (\Throwable $th) {
    //throw $th;
}

//ajouter
if(!empty($_POST) && empty($_GET['id'])):
    $imagePath = __files('image');
    if ($imagePath) {
        $_POST['image'] = $imagePath;
    }
    unset($_POST['_wysihtml5_mode']);
    extract($_POST);

    try {

        $_POST["status"] = 1;
        // Ajoutez l'article avec le chemin de l'image
        \App\modeles\ModeleClasse::add("presentation", $_POST);

        $success= "article ajouté avec succès";
        header("location: ".LINK."presentation");
    } catch(Throwable $th) {
        echo $th->getMessage();die();
    }
endif;


// supprimer
if(isset($_GET)) :
    extract($_GET);


    try {


    } catch (\Throwable $th) {
        //throw $th;
    }
endif;
