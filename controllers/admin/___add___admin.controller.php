<?php

use App\modeles\ModeleClasse;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $_POST['password']= md5($_POST['password']);
    extract($_POST);
    try{
        $empl =ModeleClasse::getone($idpersonne,'personne');
        if($empl){
            ModeleClasse::add('administrateur',$_POST);
            header('location:'.LINK.'___profile');
            $success="Administrateur crée !";
        }
        return $error="Identifiant employé incorrect !";
    }catch(Exception $e){
        return $error=$e->getMessage();
    }
    if(count($entreprises)>0){
        $_POST['identreprise']=$entreprises[0]['id'];
    }else{
        $_POST['identreprise']=1;
    }
    // Téléchargement du fichier et obtention du chemin
    $imagePath = __files('photo');
    if ($imagePath) {
        $_POST['photo'] = $imagePath;
    }
    $_POST['status']=1;
    extract($_POST);
    try{
        #Ajout d'un employé
        ModeleClasse::add('personne',$_POST);
        return $success='Employé ajouté avec succès';
    }catch(Exception $e){
        #Echec d'ajout.
        return $error = $e->getMessage();
    }
}