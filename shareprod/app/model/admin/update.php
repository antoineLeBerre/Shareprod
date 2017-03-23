<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/03/2017
 * Time: 00:17
 */

if (!defined("BASE_URL")) die("ressource interdite");
function update($table, $set, $resSet, $where, $resWhere)
{
    global $pdo;

    try
    {
        $query = $pdo->prepare("UPDATE $table 
                                SET $set = :resSet
                                WHERE $where = :resWhere")
        ;$query->bindValue(':resSet', $resSet, PDO::PARAM_STR);
        $query->bindValue(':resWhere', $resWhere, PDO::PARAM_STR);
        $query->execute();

        $query->closeCursor();

        return true;
    } catch (Exception $e) {
        echo "Erreur Login".$e->getMessage();
    }
}