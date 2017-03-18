<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16/03/2017
 * Time: 13:01
 */
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/users/login.php");

if (!isset($_POST["post_password"])){
    include_once ("app/view/users/connexion.php");
}
else{
    if (empty($_POST["post_login"]) || empty($_POST["post_password"])){
        location("users", "connexion", "champVide=nok");
    }

    $_POST["post_password"] = md5($_POST["post_password"].SALAGE);
    $user = verif_login($_POST);
//    var_dump($_POST);
//    var_dump($user);
//    die();
    if (!$user){
        location("users", "connexion", "connexion=nok");
    }
    else{
        $_SESSION["sp_user"] = $user;
        location("projets", "index", "&connexion=ok");
    }
}
