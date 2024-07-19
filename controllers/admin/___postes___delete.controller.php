<?php

use App\modeles\ModeleClasse;

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $_GET['status']=0;
    extract($_GET);
    $data=[
        'status'=>$status
    ];
    $post =[];
    try{
        ModeleClasse::update('poste',$data,$id);
        $success="Poste retiré !";
        header('Location: '. LINK . '___postes');
    }catch(Exception $e){
        return $error = $e->getMessage();
    }
}