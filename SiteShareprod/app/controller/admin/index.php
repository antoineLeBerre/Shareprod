<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/03/2017
 * Time: 23:40
 */

$options = ["id_users", "user_id_user"];
$tables = ["sp_projets", "sp_users"];
$tableUsers = lire_tables("sp_users", array("ORDER BY" => "id_users", "ORDER" => "DESC", "LIMIT" => "5"));
$tabProjets = lire_tables($tables, "sp_users"]), array("WHERE"=>$options, "ORDER BY" => "id_users", "ORDER" => "DESC", "LIMIT" => "5"));

foreach ($tabProjets as $indice=>$tabProjet)
{
    if (strlen($tabProjets[$indice]["description_projets"]) > 100){
        $tabProjets[$indice]["description_projets"] = substr($tabProjets[$indice]["description_projets"], 0, 100)."...";
    }
}

foreach ($tabProjets as $indice=>$tabProjet)
{
    if (strlen($tabProjets[$indice]["description_projets"]) > 100){
        $tabProjets[$indice]["description_projets"] = substr($tabProjets[$indice]["description_projets"], 0, 100)."...";
    }
}

foreach ($tabProjets as $indice=>$tabProjet)
{
    if (strlen($tabProjets[$indice]["description_projets"]) > 100){
        $tabProjets[$indice]["description_projets"] = substr($tabProjets[$indice]["description_projets"], 0, 100)."...";
    }
}

if (sizeof($tableUsers) > 5)   {
    $nbAffichage = 5;
}
else{
    $nbAffichage = sizeof($tableUsers);
}


include_once ("app/view/admin/index.php");
