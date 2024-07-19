<?php

use App\modeles\ModeleClasse;

try{
    $employes= ModeleClasse::getall('personne');
    $les_employes=[];
    foreach($employes as $employe){
        if(!$employe['status']==0){
            $les_employes []=$employe;
        }
    }
    rsort($les_employes);
}catch(Exception $e){
    return $error = $e->getMessage();
}