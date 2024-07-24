<?php

use App\modeles\ModeleClasse;

// afficher presentation
try {
    $TabPresentaion = [];
    $req = \App\modeles\ModeleClasse::getall('presentation');
    foreach ($req as  $value) {
        array_push($TabPresentaion, $value);
    }

} catch (\Throwable $th) {
    //throw $th;
}


// afficher entreprise
try {
    $TabEntreprise = [];
    $req = \App\modeles\ModeleClasse::getall('entreprise');
    foreach ($req as  $value) {
        array_push($TabEntreprise, $value);
    }

} catch (\Throwable $th) {
    //throw $th;
}