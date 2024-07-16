<?php
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
}
// die("Non")