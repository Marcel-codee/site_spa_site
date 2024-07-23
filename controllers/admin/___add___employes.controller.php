<?php

use App\modeles\ModeleClasse;

try{
    $tous_les_postes= ModeleClasse::getall('poste');
    $postes=[];
    foreach($tous_les_postes as $poste){
        if($poste['status']==1){
            $objet=[
                'id'=>$poste['id'],
                'libelle'=>$poste['libelle']
            ];
            #L'ensemble des postes au sein de l'entreprise;
            $postes []=$objet;
        }
    }
}catch(Exception $e){
    return $error = $e->getMessage();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $entreprises =ModeleClasse::getall('entreprise');
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
        $success='Employé ajouté avec succès';
        header('location:'.LINK.'___employes');
    }catch(Exception $e){
        #Echec d'ajout.
        return $error = $e->getMessage();
    }
}