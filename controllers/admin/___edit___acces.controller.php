<?php

use App\modeles\ModeleClasse;

if($_SERVER['REQUEST_METHOD']=="GET"){
    extract($_GET);
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    extract($_POST);
    if($password==$_SESSION['userConnect']['motPass'] && $passwordNew1===$passwordNew2){
        #Modification du mot de passse !
        $data=[
            'password'=>md5($passwordNew1)
        ];
        try{
            ModeleClasse::update('administrateur',$data,$_GET['id']);
            return $success= "Mot de passe modifié avec succes !!";
        }catch(Exception $e){
            return $error= $e->getMessage();
        }
    }
    // deb("Je suis la");
    return $error= "Informations incorrectes";
}