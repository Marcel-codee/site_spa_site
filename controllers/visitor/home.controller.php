<?php

use App\modeles\ModeleClasse;

try{
    $pp = ModeleClasse::getallJoin2('personne','contrat');
    $nos_employes=[];
    foreach($pp as $emp){
        #Créer un script qui va automatiquement mettre le status contrat à expire.
        if($emp['status_contrat']!='NON EXPIRE'){
            $nos_employes []=$emp;
        }
    }
}catch(Exception $e){
    return $e->getMessage();
}