<?php

use App\modeles\ModeleClasse;


if (!empty($_GET)) :
               try {

                $tab=[];
                $Requete = ModeleClasse::getall('service');
                    $formation = ModeleClasse::getoneByname('libelle','type_service','formation');
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

                        array_push($tab,$objet);
                    endif;
                endforeach;
                deb($tab);
            } catch (\Throwable $th) {
                //throw $th;
            }

           
endif;

