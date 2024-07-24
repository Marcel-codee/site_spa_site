<?php

use App\modeles\ModeleClasse;

if($_SERVER['REQUEST_METHOD']=='GET'){
    extract($_GET);
    $data=[
        'status'=>0
    ];
    try{
        ModeleClasse::update('personne',$data,$id);
        $success="Employé supprimé !";
        header('Location: '. LINK .'___employes');
    }catch(Exception $e){
        return $error =$e->getMessage();
    }
}