<?php

use App\Autoloader;

session_start();
include './config/db.php';
include './Autoloader.php';
include './functions/functions.php';

Autoloader::register();
$page='home';
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}
// if($page!='connexion'){
//     is_connected();
// }
#Toutes les pages qu'un visiteur peut acceder
$pages_visitor =[
    'home',
    'about',
    'contact',
    'service1',
    'service2',
    // 'service3',
    // 'service_details'
];
#Toutes les pages admins
$pages_admin =[
    'dashboard'
];
if(in_array($page,$pages_admin)){
    $controllersPagesAdmin = scandir('./'.'controllers'.'/admin');
    $viewsPagesAdmin = scandir('./'.'views'.'/admin');
    $connecter=isset($_SESSION['userConnect']['login']);
    if(FileExist($page,[$controllersPagesAdmin,$viewsPagesAdmin])){
        require_once('./controllers/admin/' . $page . '.controller.php');
        #Tentative d'accès à une page admin
    }
    #Gerer Erreur 404 pour admin.
}elseif(in_array($page,$pages_visitor)){
    $controllersPagesVisitor = scandir('./'.'controllers'.'/visitor');
    $viewsPagesVisitor = scandir('./'.'views'.'/visitor');
    if(FileExist($page,[$controllersPagesVisitor,$viewsPagesVisitor])){
        // deb($page);
        #Espace visitor
        require_once('./controllers/visitor/' . $page . '.controller.php');
        include('./includes/visitor/head.php');
        include ('./includes/visitor/backtotop.php');
        include ('./includes/visitor/preload.php');
        if($page=="home"){
            include ('./includes/visitor/header_home.php');
            require_once('./views/visitor/'. $page . '.view.php');
            include ('./includes/visitor/footer_home.php');
        }else{
            #Autres pages du site
            include ('./includes/visitor/header.php');
            require_once('./views/visitor/'. $page . '.view.php');
            include ('./includes/visitor/footer.php');
        }
        include ('./includes/visitor/js.php');
        die();
    }
}else{
    #Erreur 404 pour visiteur (Redirection à l'accueil)
    header('Location:' . LINK .'');
}