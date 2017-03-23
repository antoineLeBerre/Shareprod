<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/03/2017
 * Time: 05:51
 */
if (!defined("BASE_URL")) die("ressource interdite");

$optionsProjets = ["id_users", "user_id_user"];
$tablesProjets = ["sp_projets", "sp_users"];
$tabProjets = lire_tables($tablesProjets, array("WHERE"=>$optionsProjets));

foreach ($tabProjets as $indice=>$tabProjet)
{
    if (strlen($tabProjets[$indice]["description_projets"]) > 100){
        $tabProjets[$indice]["description_projets"] = substr($tabProjets[$indice]["description_projets"], 0, 100)."...";
    }
}

include_once ("app/view/admin/afficher_projets.php");
