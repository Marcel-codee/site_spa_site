<?php

use App\modeles\ModeleClasse;


try {
    $i=0;
    $listArticle = [];
    $read = ModeleClasse::getall("actualite");
    foreach ($read as $row) {
        $object = [
            'Titre' => $row['titre'],
            'Contenu' => $row['contenu'],
            'Image' => $row['image']
        ];
        array_push($listArticle, $object);
    }
} catch (Throwable $th) {
    echo $th->getMessage();
}