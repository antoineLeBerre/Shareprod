<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/03/2017
 * Time: 23:40
 */

$optionsProjets = ["id_users", "user_id_user"];
$tablesProjets = ["sp_projets", "sp_users"];
$tablesCommentaires = ["sp_projets", "sp_users", "sp_commentaire"];
$optionsCommentaires = ["id_users", "sp_commentaire.user_id_user", "id_projets", "projets_id_projets"];
$tableUsers = lire_tables("sp_users", array("ORDER BY" => "id_users", "ORDER" => "DESC", "LIMIT" => "5"));
$tabProjets = lire_tables($tablesProjets, array("WHERE"=>$optionsProjets, "ORDER BY" => "id_users", "ORDER" => "DESC", "LIMIT" => "5"));
$tabCommentaires = lire_tables($tablesCommentaires, array("WHERE"=>$optionsCommentaires, "ORDER BY" => "id_users", "ORDER" => "DESC", "LIMIT" => "5"));

foreach ($tabProjets as $indice=>$tabProjet)
{
    if (strlen($tabProjets[$indice]["description_projets"]) > 100){
        $tabProjets[$indice]["description_projets"] = substr($tabProjets[$indice]["description_projets"], 0, 100)."...";
    }
}

foreach ($tabCommentaires as $indice=>$tabCommentaire)
{
    if (strlen($tabCommentaires[$indice]["description_projets"]) > 100){
        $tabCommentaires[$indice]["content_commentaire"] = substr($tabProjets[$indice]["content_commentaire"], 0, 100)."...";
    }
}

include_once ("app/view/admin/index.php");
