<?php

use App\Autoloader;

session_start();
include './config/db.php';
include './Autoloader.php';
include './functions/functions.php';

Autoloader::register();
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
// if($page!='connexion'){
//     is_connected();
// }


if(!in_array($page,['home','about','service','blog','contact'])){
    $controllersPagesAdmin = scandir('./'.'controllers'.'/admin');
    $viewsPagesAdmin = scandir('./'.'views'.'/admin');
    $connecter=isset($_SESSION['userConnect']['login']);
    if(FileExist($page,[$controllersPagesAdmin,$viewsPagesAdmin])){
        require_once('./controllers/admin/' . $page . '.controller.php');
        include('./includes/admin/head.php');
        if($page=="___spa___admin" || $connecter){
            if($connecter && $page=="___spa___admin"){
                #Redirige si dejà connecter et il veut se connecter à nouveau
                header('Location:' . LINK . '___dashboard');
            }
            #Espace admin
            if($connecter){
                include('./includes/admin/pre-loader.php');
                include('./includes/admin/header.php');
                include('./includes/admin/side_bar.php');
            }
            require_once('./views/admin/'. $page . '.view.php');
            if($connecter){
                include('./includes/admin/footer.php');
            }
            include('./includes/admin/js.php');
            die();
        }
        header('Location:' . LINK .'');
    }
    if($connecter){
        #Erreur 404 pour admin connecté
        require_once('./controllers/admin/' . "error" . '.controller.php');
        include('./includes/admin/head.php');
        require_once('./views/admin/'. "error" . '.view.php');
        die();
    }
}else{
    $controllersPagesVisitor = scandir('./'.'controllers'.'/visitor');
    $viewsPagesVisitor = scandir('./'.'views'.'/visitor');
    if(FileExist($page,[$controllersPagesVisitor,$viewsPagesVisitor])){
        #Espace visitor
        require_once('./controllers/visitor/' . $page . '.controller.php');
        include('./includes/visitor/head.php');
        include ('./includes/visitor/brand.php');
        include ('./includes/visitor/navbar.php');
        include ('./includes/visitor/caroussel.php');
        require_once('./views/visitor/'. $page . '.view.php');
        include('./includes/visitor/footer.php');
        die();
    }
}
#Erreur 404 pour visiteur
include('./includes/visitor/head.php');
include ('./includes/visitor/brand.php');
include ('./includes/visitor/navbar.php');
include ('./includes/visitor/header.php');
require_once('./controllers/visitor/error.controller.php');
require_once('./views/visitor/error.view.php');
include('./includes/visitor/footer.php');