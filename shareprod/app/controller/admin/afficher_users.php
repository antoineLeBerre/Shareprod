<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/03/2017
 * Time: 01:35
 */

$tableUsers = lire_tables("sp_users");

foreach ($tableUsers as $key=>$tableUser)
{
    if (strlen($tableUser["password_users"]) > 20){
        $tableUsers[$key]["password_users"] = substr($tableUser["password_users"], 0, 20)."...";
    }
}
include_once ("app/view/admin/afficher_users.php");


