<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/03/2017
 * Time: 12:10
 */

$tabSuperUsers = lire_tables("sp_superusers");

foreach ($tabSuperUsers as $key=>$tabSuperUser)
{
    if (strlen($tabSuperUser["password_superusers"]) > 20){
        $tabSuperUsers[$key]["password_superusers"] = substr($tabSuperUser["password_superusers"], 0, 20)."...";
    }
}
include_once ("app/view/admin/afficher_superusers.php");
