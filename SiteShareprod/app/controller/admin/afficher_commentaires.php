<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/03/2017
 * Time: 05:49
 */

$tablesCommentaires = ["sp_projets", "sp_users", "sp_commentaire"];
$optionsCommentaires = ["id_users", "sp_commentaire.user_id_user", "id_projets", "projets_id_projets"];
$tabCommentaires = lire_tables($tablesCommentaires, array("WHERE"=>$optionsCommentaires));

foreach ($tabCommentaires as $indice=>$tabCommentaire)
{
    if (strlen($tabCommentaires[$indice]["description_projets"]) > 100){
        $tabCommentaires[$indice]["content_commentaire"] = substr($tabProjets[$indice]["content_commentaire"], 0, 100)."...";
    }
}

include_once ("app/view/admin/afficher_commentaires.php");
