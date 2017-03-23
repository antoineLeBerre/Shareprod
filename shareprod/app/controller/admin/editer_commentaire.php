<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/03/2017
 * Time: 23:40
 */
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/admin/update.php");

if (isset($_GET["id_commentaire"])){
    $tabCommentaires = lire_tables("sp_commentaire", array("WHERE"=>["id_commentaire", $_GET["id_commentaire"]]));
    if (!isset($_POST["contenu_commentaire"])){
        $tabUsers = lire_tables("sp_users");
        $tabProjets = lire_tables("sp_projets");
        include_once ("app/view/admin/editer_commentaire.php");
    }
    else{

        if (empty($_POST["contenu_commentaire"])){
            location("admin", "editer_commentaire", "champVide=nok&id_commentaire=$tabCommentaires[0][\"id_commentaire\"]");
        }
        if ($_POST["contenu_commentaire"] != $tabCommentaires[0]['content_commentaire']){
            $resultat = update("sp_commentaire", "content_commentaire", $_POST["contenu_commentaire"], "id_commentaire", $_GET["id_commentaire"]);
            if (!$resultat){
                location("admin", "editer_commentaire", "edite_content=nok&id_commentaire=$tabCommentaires[0][\"id_commentaire\"]");
            }
        }
        if ($_POST["projet_commentaire"] != $tabCommentaires[0]['projets_id_projets']){
            $resultat = update("sp_commentaire", "projets_id_projets", $_POST["projet_commentaire"], "id_commentaire", $_GET["id_commentaire"]);
            if (!$resultat){
                location("admin", "editer_commentaire", "edite_projet=nok&id_commentaire=$tabCommentaires[0][\"id_commentaire\"]");
            }
        }
        if ($_POST["auteur_commentaire"] != $tabCommentaires[0]['user_id_user']){
            $resultat = update("sp_commentaire", "user_id_user", $_POST["auteur_commentaire"], "id_commentaire", $_GET["id_commentaire"]);
            if (!$resultat){
                location("admin", "editer_commentaire", "edite_user=nok&id_commentaire=$tabCommentaires[0][\"id_commentaire\"]");
            }
        }

//    var_dump($inserer);
//    die();

        location("admin", "afficher_commentaires", "update=ok");
    }
}
