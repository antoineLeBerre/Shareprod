<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/03/2017
 * Time: 23:29
 */
if (!defined("BASE_URL")) die("ressource interdite");

if (!isset($_POST["login_user"])){
    include_once ("app/view/admin/ajouter_user.php");
}
else{

    if (empty($_POST["nom_user"]) || empty($_POST["prenom_user"]) || empty($_POST["login_user"]) || empty($_POST["password_user"]) || empty($_POST["email_user"])){
        location("admin", "ajouter_user", "champVide=nok");
    }
    $_POST["password_user"] = md5($_POST["password_user"].SALAGE);
    $inserer = insert_row("sp_users", array("nom_users"=>"'".$_POST["nom_user"]."'", "prenom_users"=>"'".$_POST["prenom_user"]."'", "login_users"=>"'".$_POST["login_user"]."'", "password_users" => "'".$_POST["password_user"]."'", "email_users" => "'".$_POST["email_user"]."'", "description_users" => "''", "avatar_users" => "''", "temoignage_users" => "''"));

//    var_dump($inserer);
//    die();

    if (!$inserer){
        location("admin", "ajouter_user", "&insert=nok");
    }
    location("admin", "afficher_users", "&insert=ok");
}