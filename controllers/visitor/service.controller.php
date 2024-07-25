<?php

use App\modeles\ModeleClasse;

try {
    $typeService = [];    
                $Requete = ModeleClasse::getall('service');
                    $formation = ModeleClasse::getoneByname('libelle','type_service','application');
                foreach($Requete as $data):
                    if($data['idtype_service']==$formation['id']):
                        $objet=[
                            "id"=>$data['id'],
                            "status"=>$data['status'],
                            "cout"=>$data['cout'],
                            "duree"=>$data['duree'],
                            "dateDebut"=>$data['dateDebut'],
                            "image"=>$data['image'],
                            "idtype_service"=>$data['idtype_service'],
                            "fichier"=>$data['fichier'],
                            "contenu"=>$data['contenu'],
                            "detail_contenu"=>$data['detail_contenu'],
                            "titre"=>$data['titre']
                        ];

                        array_push($typeService,$objet);
                    endif;
                endforeach;
                
} catch (\Throwable $th) {
    //throw $th;
}

try {
    $service = [];
    $requ = ModeleClasse::getallDesc('service','created_at');
    foreach ($requ as $data) :
        array_push($service, $data);
    endforeach;
   
    
} catch (\Throwable $th) {
    //throw $th;
}