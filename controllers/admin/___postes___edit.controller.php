<?php

use App\modeles\ModeleClasse;

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    extract($_GET);
    $post =[];
    try{
        return $post = ModeleClasse::getone($id,'poste');
    }catch(Exception $e){
        return $error = $e->getMessage();
    }
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    extract($_POST);
    try{
        ModeleClasse::update('poste',$_POST,$_GET['id']);
        $success ="Poste modifié !!";
        header('Location: '. LINK . '___postes');
    }catch(Exception $e){
        return $error=$e->getMessage();
    }
}