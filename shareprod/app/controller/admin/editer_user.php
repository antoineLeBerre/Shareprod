<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/03/2017
 * Time: 23:40
 */
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/admin/update.php");

if (isset($_GET["id_user"])){
    $tabUsers = lire_tables("sp_users", array("WHERE"=>["id_users", $_GET["id_user"]]));
    if (!isset($_POST["login_user"])){
        include_once ("app/view/admin/editer_user.php");
    }
    else{

        if (empty($_POST["nom_user"]) || empty($_POST["prenom_user"]) || empty($_POST["login_user"]) || empty($_POST["password_user"]) || empty($_POST["email_user"])){
            location("admin", "editer_user", "champVide=nok&id_user=$tabUsers[0][\"id_users\"]");
        }
        if ($_POST["nom_user"] != $tabUsers[0]['nom_users']){
            $resultat = update("sp_users", "nom_users", $_POST["nom_user"], "id_users", $_GET["id_user"]);
            if (!$resultat){
                location("admin", "editer_user", "edite_nom=nok&id_user=$tabUsers[0][\"id_users\"]");
            }
        }
        if ($_POST["prenom_user"] != $tabUsers[0]['prenom_users']){
            $resultat = update("sp_users", "prenom_users", $_POST["prenom_user"], "id_users", $_GET["id_user"]);
            if (!$resultat){
                location("admin", "editer_user", "edite_prenom=nok&id_user=$tabUsers[0][\"id_users\"]");
            }
        }
        if ($_POST["login_user"] != $tabUsers[0]['login_users']){
            $resultat = update("sp_users", "login_users", $_POST["login_user"], "id_users", $_GET["id_user"]);
            if (!$resultat){
                location("admin", "editer_user", "edite_login=nok&id_user=$tabUsers[0][\"id_users\"]");
            }
        }
        if ($_POST["password_user"] != $tabUsers[0]['password_users']){
            $_POST["password_user"] = md5($_POST["password_user"]);
            $resultat = update("sp_users", "password_users", $_POST["password_user"], "id_users", $_GET["id_user"]);
            if (!$resultat){
                location("admin", "editer_user", "edite_password=nok&id_user=$tabUsers[0][\"id_users\"]");
            }
        }
        if ($_POST["email_user"] != $tabUsers[0]['email_users']){
            $resultat = update("sp_users", "email_users", $_POST["email_user"], "id_users", $_GET["id_user"]);
            if (!$resultat){
                location("admin", "editer_user", "edite_email=nok&id_user=$tabUsers[0][\"id_users\"]");
            }
        }

//    var_dump($inserer);
//    die();

        location("admin", "afficher_users", "update=ok");
    }
}
