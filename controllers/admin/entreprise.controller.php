<?php


// afficher

try {
    $TabEntreprise = [];
    $req = \App\modeles\ModeleClasse::getall('entreprise');
    foreach ($req as  $value) {
        array_push($TabEntreprise, $value);
    }

} catch (\Throwable $th) {
    //throw $th;
}

//ajouter
if(!empty($_POST) && empty($_GET['id'])):
    $imagePath = __files('logo');
    if ($imagePath) {
        $_POST['logo'] = $imagePath;
    }
    unset($_POST['_wysihtml5_mode']);
    extract($_POST);
    var_dump($_POST);
    try {
        $_POST["status"] = 1;
        // Ajoutez l'article avec le chemin de l'image
        \App\modeles\ModeleClasse::add("entreprise", $_POST);
        $success= "article ajouté avec succès";
        header("location: ".LINK."entreprise");
    } catch(Throwable $th) {
        echo $th->getMessage();die();
    }
endif;



