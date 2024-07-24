<?php

use App\modeles\ModeleClasse;

try {
    $application = [];
    $type = ModeleClasse::getoneByname("libelle","type_service","Application");
    $appli = ModeleClasse::getallByname("idtype_service","service",$type['id']);
    if(count($appli)>=1) :
        foreach($appli as $data):
            $objet =[
                "id" => $data['id'],
                "image"=> $data['image'],
                "titre"=> $data['titre'],
                "contenu"=>$data['contenu']
            ];
            array_push($application,$objet);
        endforeach;
    endif;
} catch (Throwable $th) {
    $erreur = "not found";
}
try {
    $formation = [];
    $type = ModeleClasse::getoneByname("libelle","type_service","Formation");
    $form = ModeleClasse::getallByname("idtype_service","service",$type['id']);
    if(count($form)>=1) :
        foreach($form as $data):
            $objet =[
                "id" => $data['id'],
                "image"=> $data['image'],
                "titre"=> $data['titre'],
                "contenu"=>$data['contenu']
            ];
            array_push($formation,$objet);
        endforeach;
    endif;
} catch (Throwable $th) {
    $erreur = "not found";
}

try {
    $employe = [];
    $emp = ModeleClasse::getall("personne");
    foreach($emp as $data):
        $poste = ModeleClasse::getone($data['idposte'],"poste");
        if($poste['libelle'] == "chef"):
            $chef = $data;
        else:
            $objet =[
                "id" => $data['id'],
                "nom"=> $data['nom'],
                "prenom"=> $data['prenom'],
                "photo"=>$data['photo'],
                "poste"=>$poste['libelle']
            ];
            array_push($employe,$objet);
        endif;
    endforeach;
    
} catch (Throwable $th) {
    $erreur = "not found";
}