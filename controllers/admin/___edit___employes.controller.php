<?php
use App\modeles\ModeleClasse;

#Recuperation des informations de l'employé à modifier
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    extract($_GET);
    $employe =[];
    try{
        $employe = ModeleClasse::getone($id,'personne');
        $p=ModeleClasse::getall('poste');
        $postess=[];
        if(count($p)>0){
            foreach($p as $poste){
                if($poste['status']==1){
                    $postess [] = [
                        'idposte'=>$poste['id'],
                        'Libelle'=> $poste['libelle']
                    ];
                }
            }
        }
        return $postess;
    }catch(Exception $e){
        return $error = $e->getMessage();
    }
}

#Modification des informations de l'employé
if($_SERVER['REQUEST_METHOD']=='POST'){
    extract($_POST);
    try{
        ModeleClasse::update('personne',$_POST,$_GET['id']);
        $success ="Informations employé modifiés !!";
        header('Location: '. LINK . '___employes');
    }catch(Exception $e){
        return $error=$e->getMessage();
    }
}