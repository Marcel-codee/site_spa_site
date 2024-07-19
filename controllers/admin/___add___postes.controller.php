<?php

use App\modeles\ModeleClasse;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $_POST['status']=1;
    extract($_POST);
    try{
        if(!empty($libelle)){
            ModeleClasse::add('poste',$_POST);
            return $success= "Poste crée !";
        }
        return $error= "Nom du poste ne peut pas être vide";
    }catch(Exception $e){
        return $error = $e->getMessage();
    }
}