<?php
use App\modeles\ModeleClasse;

if(!empty($_GET)):

    extract($_GET);
    //deb($_GET);
    try {
        $recc = ModeleClasse::getoneByname('id', 'entreprise', $id);

    } catch (\Throwable $th) {
        //throw $th;
        return $error = $th->getMessage();
    }
endif;

if (isset($_POST)) {
    $imagePath = __files('logo');
    if ($imagePath) {
        $_POST['logo'] = $imagePath;
    }

    unset($_POST['_wysihtml5_mode']);
    extract($_POST);
    try {
        $mod = ModeleClasse::update('entreprise', $_POST, $id);
        header('location:'.LINK.'entreprise');
    } catch (\Throwable $th) {
        //throw $th;
    }
}