<?php

use App\modeles\ModeleClasse;

$postes=[];
try{
    $p=ModeleClasse::getall('poste');
    if(count($p)>0){
        foreach($p as $poste){
            if($poste['status']==1){
                $postes [] = [
                    'idposte'=>$poste['id'],
                    'Libelle'=> $poste['libelle']
                ];
            }
        }
    }
}catch(Exception $e){
    return $error= $e->getMessage();
}