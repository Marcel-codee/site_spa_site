<?php

namespace App\modeles;

class ModeleClasse
{
    static function getone($id, $table)
    {
        global $connect;
        $req = $connect->query("SELECT * FROM " . $table . " WHERE id=" . $id);
        $result = $req->fetch();
        return $result;
    }
    
    static function getallDesc($table,$trie)
    {
        global $connect;
        $req = $connect->query("SELECT * FROM " . $table." ORDER BY ". $trie ." DESC");
        $result = $req->fetchAll();
        return $result;
    }
    static function getall($table)
    {
        global $connect;
        $req = $connect->query("SELECT * FROM " . $table);
        $result = $req->fetchAll();
        return $result;
    }
    static function getallJoin2($tablepk, $tablefk)
    {
        global $connect;
        $req = $connect->query("SELECT * FROM " . $tablepk . " INNER JOIN " . $tablefk . " WHERE " . $tablepk . ".id=" . $tablefk . ".id" . $tablepk);
        $result = $req->fetchAll();
        return $result;
    }

        static function getAllJoin3($table1, $table2, $intermediateTable, $table1_id, $table2_id)
        {
            global $connect;
            $query = "SELECT $table1.*, $table2.*
                      FROM $table1
                      INNER JOIN $intermediateTable ON $table1.id = $intermediateTable.$table1_id
                      INNER JOIN $table2 ON $intermediateTable.$table2_id = $table2.id";
            
            $req = $connect->query($query);
            $result = $req->fetchAll();
            return $result;
        }
    
    


    static function getLastInsert($table){
        global $connect;
        $req = $connect->prepare("SELECT * FROM " . $table . " ORDER BY created_at DESC LIMIT 1");
        $req->execute(); // Exécuter la requête préparée
        $result = $req->fetch(); // Récupérer le résultat sous forme de tableau associatif
        return $result;
    }
    

    static function delete($id, $table)
    {
        global $connect;
        $connect->query("DELETE FROM " . $table . " WHERE id=" . $id);
    }    

    static function getoneByname($name, $table, $value)
    {
        global $connect;
        $req = $connect->prepare("SELECT * FROM " . $table . " WHERE " . $name . "= ?");
        $req->execute([$value]);
        $result = $req->fetch();
        return $result;
    }
    
    static function getallByname($name, $table, $value)
    {
        global $connect;
        $req = $connect->prepare("SELECT * FROM " . $table . " WHERE " . $name . "= ?");
        $req->execute([$value]);
        $result = $req->fetchAll();
        return $result;
    }
    
    // Se connecter
    static function loginUser($table, $champ1, $value1, $champ2, $value2)
    {
        global $connect;
        $req = $connect->prepare("SELECT * FROM " . $table . " WHERE " . $champ1 . "= ? AND ". $champ2."= ?");
        $req->execute([$value1, $value2]);
        $result = $req->fetch();
        return $result;
    }

    public static function add($table, $post): void
    {
        $dat = [];
        $names = "";
        foreach ($post as $p => $v) {
            array_push($dat, $v);
            $names .= $p . "=?,";
        }
        $names = "INSERT INTO " . $table . " SET " . substr($names, 0, -1);
        global $connect;
        $req = $connect->prepare($names);
        $req->execute($dat);
    }


    public static function update($table, $post, $id): void
    {
        $dat = [];
        $names = "";
        foreach ($post as $p => $v) {
            array_push($dat, $v);
            $names .= $p . "=?,";
        }
        array_push($dat, $id);
        $names = "UPDATE " . $table . " SET " . substr($names, 0, -1) . "WHERE id=?";
        global $connect;
        $req = $connect->prepare($names);
        $req->execute($dat);
    }

    
    static function changeStatus($table, $status, $id)
    {
        global $connect;
        $query = "UPDATE " . $table . " SET status = " . $status . " WHERE id = " . $id;
        $connect->query($query);
    }
    
    
}
