<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/03/2017
 * Time: 23:40
 */
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/admin/update.php");

if (isset($_GET["id_superuser"])){
    $tabSuperusers = lire_tables("sp_superusers", array("WHERE"=>["id_superusers", $_GET["id_superuser"]]));
    if (!isset($_POST["login_superuser"])){
        include_once ("app/view/admin/editer_superuser.php");
    }
    else{

        if (empty($_POST["nom_superuser"]) || empty($_POST["prenom_superuser"]) || empty($_POST["login_superuser"]) || empty($_POST["password_superuser"]) || empty($_POST["email_superuser"])){
            location("admin", "editer_superuser", "champVide=nok&id_superuser=$tabSuperusers[0][\"id_superuser\"]");
        }
        if ($_POST["nom_superuser"] != $tabSuperusers[0]['nom_superusers']){
            $resultat = update("sp_superusers", "nom_superusers", $_POST["nom_superuser"], "id_superusers", $_GET["id_superuser"]);
            if (!$resultat){
                location("admin", "editer_superuser", "edite_nom=nok&id_superuser=$tabSuperusers[0][\"id_superusers\"]");
            }
        }
        if ($_POST["prenom_superuser"] != $tabSuperusers[0]['prenom_superusers']){
            $resultat = update("sp_superusers", "prenom_superusers", $_POST["prenom_superuser"], "id_superusers", $_GET["id_superuser"]);
            if (!$resultat){
                location("admin", "editer_superuser", "edite_prenom=nok&id_superuser=$tabSuperusers[0][\"id_superusers\"]");
            }
        }
        if ($_POST["login_superuser"] != $tabSuperusers[0]['login_superusers']){
            $resultat = update("sp_superusers", "login_superusers", $_POST["login_superuser"], "id_superusers", $_GET["id_superuser"]);
            if (!$resultat){
                location("admin", "editer_superuser", "edite_login=nok&id_superuser=$tabSuperusers[0][\"id_superusers\"]");
            }
        }

        if ($_POST["password_superuser"] != $tabSuperusers[0]['password_superusers']){
            $_POST["password_superuser"] = md5($_POST["password_superuser"]);
            $resultat = update("sp_superusers", "password_superusers", $_POST["password_superuser"], "id_superusers", $_GET["id_superuser"]);
            if (!$resultat){
                location("admin", "editer_superuser", "edite_password=nok&id_superuser=$tabSuperusers[0][\"id_superusers\"]");
            }
        }
        if ($_POST["email_superuser"] != $tabSuperusers[0]['email_superusers']){
            $resultat = update("sp_superusers", "email_superusers", $_POST["email_superuser"], "id_superusers", $_GET["id_superuser"]);
            if (!$resultat){
                location("admin", "editer_superuser", "edite_email=nok&id_superuser=$tabSuperusers[0][\"id_superusers\"]");
            }
        }

//    var_dump($inserer);
//    die();

        location("admin", "afficher_superusers", "update=ok");
    }
}
