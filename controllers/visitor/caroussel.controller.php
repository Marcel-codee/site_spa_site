<?php

use App\modeles\ModeleClasse;


try {
    $i=0;
    $listArticle = [];
    $read = ModeleClasse::getall("article");
    foreach ($read as $row) {
        $object = [
            'Titre' => $row['Titre'],
            'Contenu' => $row['Contenu'],
            'Image' => $row['Image']
        ];
        array_push($listArticle, $object);
    }
} catch (Throwable $th) {
    echo $th->getMessage();
}