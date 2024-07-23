<?php

use App\modeles\ModeleClasse;

try {
    $nbEmploye = count(ModeleClasse::getall("personne"));
} catch (Throwable $th) {
    $error = $th->getMessage();
}
try {
    $nbClient = count(ModeleClasse::getall("client"));
} catch (Throwable $th) {
    $error = $th->getMessage();
}
try {
    $nbService = count(ModeleClasse::getall("service"));
} catch (Throwable $th) {
    $error = $th->getMessage();
}
try {
    $nbPoste = count(ModeleClasse::getall("poste"));
} catch (Throwable $th) {
    $error = $th->getMessage();
}