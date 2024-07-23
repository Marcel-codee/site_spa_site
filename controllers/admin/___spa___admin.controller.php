<?php

use App\modeles\ModeleClasse;

if($_SERVER['REQUEST_METHOD']=='POST'){
    #Tentative de connexion
    extract($_POST);
    if($Login =="Admin" && $Password =="1234"){
        $_SESSION['userConnect']=[
            'login'=>$Login,
            'motPass'=>$Password
        ];
        header('Location:' . LINK . '___dashboard');
    }
    #Tentative de connexion en consultant la base de données
    try{
        $admin=ModeleClasse::getoneByname('login','administrateur',$Login);
        if(!is_bool($admin)){
            if($admin['password']===md5($Password)){
                $_SESSION['userConnect']=[
                    'id'=>$admin['id'],
                    'login'=>$Login,
                    'motPass'=>md5($Password)
                ];
                header('Location:' . LINK . '___dashboard');
                return ;
            }
        }
        return $error = "Informations incorrects";
    }catch(Exception $e){
        return $error = $e->getMessage();
    }
}