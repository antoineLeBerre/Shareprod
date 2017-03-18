<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17/03/2017
 * Time: 09:28
 */

if (!isset($_POST["login_user"])){
    include_once ("app/view/admin/ajouter_user.php");
}
else{
    if (!empty($_POST["chel_CGU"])){
        location("users", "connexion", "CGU=nok");
    }

    if (empty($_POST["nom_user"]) || empty($_POST["prenom_user"]) || empty($_POST["login_user"]) || empty($_POST["password_user"]) || empty($_POST["email_user"]) || empty($_POST["verifPassword_user"])){
        location("users", "connexion", "champVide=ok");
    }

    if ($_POST["password_user"] != $_POST["verifPassword_user"]){
        location("users", "connexion", "WrongPassword=ok");
    }

    $_POST["password_user"] = md5($_POST["password_user"].SALAGE);
    $inserer = insert_row("sp_users", array("nom_users"=>"'".$_POST["nom_user"]."'", "prenom_users"=>"'".$_POST["prenom_user"]."'", "login_users"=>"'".$_POST["login_user"]."'", "password_users" => "'".$_POST["password_user"]."'", "email_users" => "'".$_POST["email_user"]."'", "description_users" => "''", "avatar_users" => "''", "temoignage_users" => "''"));

//    var_dump($inserer);
//    die();

    if (!$inserer){
        location("users", "connexion", "notif=nok");
    }
    location("users", "connexion", "notif=nok");
}
