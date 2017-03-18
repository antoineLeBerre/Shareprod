<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17/03/2017
 * Time: 09:28
 */
if (!defined("BASE_URL")) die("ressource interdite");
protection("sp_user", "projets", "index");

if (!isset($_POST["login_user"])){
    include_once ("app/view/admin/ajouter_user.php");
}
else{
    if (empty($_POST["check_CGU"])){
        location("users", "connexion", "CGU=nok");
    }

    if (empty($_POST["nom_user"]) || empty($_POST["prenom_user"]) || empty($_POST["login_user"]) || empty($_POST["password_user"]) || empty($_POST["email_user"]) || empty($_POST["verifPassword_user"])){
        location("users", "connexion", "champVide=ok");
    }

    if ($_POST["password_user"] != $_POST["verifPassword_user"]){
        location("users", "connexion", "WrongPassword=ok");
    }

    $users = lire_tables("sp_users");
    foreach ($users as $user) {
        if (($_POST["login_user"] == $user["login_users"]) || ($_POST["email_user"] == $user["email_users"])) {
            location("users", "connexion", "notif=SameNameOrEmail");
        }
    }

    $_POST["password_user"] = md5($_POST["password_user"].SALAGE);
    $inserer = insert_row("sp_users", array("nom_users"=>"'".$_POST["nom_user"]."'", "prenom_users"=>"'".$_POST["prenom_user"]."'", "login_users"=>"'".$_POST["login_user"]."'", "password_users" => "'".$_POST["password_user"]."'", "email_users" => "'".$_POST["email_user"]."'"));

//    var_dump($inserer);
//    die();

    if (!$inserer){
        location("users", "connexion", "notif=nok");
    }
    location("users", "connexion", "notif=ok");
}
