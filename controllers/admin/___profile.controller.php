<?php

use App\modeles\ModeleClasse;

try{
    $les_admin=ModeleClasse::getallJoin2('personne','administrateur');
}catch(Exception $e){
    return $error= $e->getMessage();
}