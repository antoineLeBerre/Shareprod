<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/03/2017
 * Time: 23:40
 */

$options = ["id_users", "user_id_user"];
$tables = ["sp_projets", "sp_users"];
$tableUsers = lire_tables("sp_users");
$tabProjets = lire_tables($tables, array("WHERE"=>$options));

foreach ($tabProjets as $indice=>$tabProjet)
{
    if (strlen($tabProjets[$indice]["description_projets"]) > 100){
        $tabProjets[$indice]["description_projets"] = substr($tabProjets[$indice]["description_projets"], 0, 100)."...";
    }
}

if (sizeof($tableUsers) > 5)   {
    $nbAffichae = 5;
}
else{
    $nbAffichae = sizeof($tableUsers);
}


include_once ("app/view/admin/index.php");
