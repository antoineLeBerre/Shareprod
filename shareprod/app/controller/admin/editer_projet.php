<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/03/2017
 * Time: 23:40
 */
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/admin/update.php");

if (isset($_GET["id_projet"])){
    $tabProjets = lire_tables("sp_projets", array("WHERE"=>["id_projets", $_GET["id_projet"]]));
    if (!isset($_POST["nom_projet"])){
        $tabUsers = lire_tables("sp_users");
        include_once ("app/view/admin/editer_projet.php");
    }
    else{
        if (empty($_POST["nom_projet"]) || empty($_POST["titre_projet"]) || empty($_POST["description_projet"]) || empty($_POST["montant_projet"])){
            location("admin", "ajouter_projet", "champVide=nok&id_projet=$tabProjets[0][\"id_projet\"]");
        }

        if ($_POST["nom_projet"] != $tabProjets[0]['nom_projets']){
            $resultat = update("sp_projets", "nom_projets", $_POST["nom_projet"], "id_projets", $_GET["id_projet"]);
            if (!$resultat){
                location("admin", "editer_projet", "edite_nom=nok&id_projet=$tabProjets[0][\"id_projet\"]");
            }
        }
        if ($_POST["titre_projet"] != $tabProjets[0]['titre_projets']){
            $resultat = update("sp_projets", "titre_projets", $_POST["titre_projet"], "id_projets", $_GET["id_projet"]);
            if (!$resultat){
                location("admin", "editer_projet", "edite_titre=nok&id_projet=$tabProjets[0][\"id_projet\"]");
            }
        }
        if ($_POST["description_projet"] != $tabProjets[0]['description_projets']){
            $resultat = update("sp_projets", "description_projets", $_POST["description_projet"], "id_projets", $_GET["id_projet"]);
            if (!$resultat){
                location("admin", "editer_projet", "edite_description=nok&id_projet=$tabProjets[0][\"id_projet\"]");
            }
        }
        if ($_POST["login_projet"] != $tabProjets[0]['user_id_user']){
            $resultat = update("sp_projets", "user_id_user", $_POST["login_projet"], "id_projets", $_GET["id_projet"]);
            if (!$resultat){
                location("admin", "editer_projet", "edite_login=nok&id_projet=$tabProjets[0][\"id_projet\"]");
            }
        }
        if ($_POST["montant_projet"] != $tabProjets[0]['financement_max_projets']){
            $resultat = update("sp_projets", "financement_max_projets", $_POST["montant_projet"], "id_projets", $_GET["id_projet"]);
            if (!$resultat){
                location("admin", "editer_projet", "edite_montant=nok&id_projet=$tabProjets[0][\"id_projet\"]");
            }
        }//    var_dump($inserer);
//    die();

        location("admin", "afficher_projets", "update=ok");
    }
}
