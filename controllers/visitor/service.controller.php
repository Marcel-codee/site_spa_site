<?php

use App\modeles\ModeleClasse;

try {
    $typeService = [];
    $requ = ModeleClasse::getall('type_service');

    foreach ($requ as $data) :
        array_push($typeService, $data);
    endforeach;
    
} catch (\Throwable $th) {
    //throw $th;
}

try {
    $service = [];
    $requ = ModeleClasse::getallDesc('service','created_at');
    foreach ($requ as $data) :
        array_push($service, $data);
    endforeach;
   
    
} catch (\Throwable $th) {
    //throw $th;
}