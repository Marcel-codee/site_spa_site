<?php

use App\modeles\ModeleClasse;

if($_SERVER['REQUEST_METHOD']=='GET'){
    extract($_GET);
    try{
        ModeleClasse::delete($id,'administrateur');
        if($_SESSION['userConnect']['id']==$id){
            session_destroy();
            $_SESSION['userConnect']=null;
            header('Location:' . LINK . '___spa___admin');
        }
        $success="Admin retiré !";
        header('Location: ' . LINK . '___profile');
    }catch(Exception $e){
        return $error= $e->getMessage();
    }
}