<?php

use App\modeles\ModeleClasse;

if (!empty($_GET)):

    extract($_GET);
    //deb($_GET);
    try {
        $recc = ModeleClasse::getoneByname('id', 'presentation', $id);

    } catch (\Throwable $th) {
        //throw $th;
        return $error = $th->getMessage();
    }
endif;

if (isset($_POST)) {
    $imagePath = __files('image');
    if ($imagePath) {
        $_POST['image'] = $imagePath;
    }
    unset($_POST['_wysihtml5_mode']);
    extract($_POST);
    try {
        $mod = ModeleClasse::update('presentation', $_POST, $id);
        header('location:' . LINK . 'presentation');
    } catch (\Throwable $th) {
        //throw $th;
    }
}