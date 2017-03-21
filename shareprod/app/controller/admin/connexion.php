<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16/03/2017
 * Time: 13:01
 */
if (!defined("BASE_URL")) die("ressource interdite");
include_once ("app/model/admin/login.php");

if (!isset($_POST["post_password"])){
    include_once ("app/view/admin/connexion.php");
}
else{
    if (empty($_POST["post_login"]) || empty($_POST["post_password"])){
        location("admin", "connexion", "champVide=ok");
    }

    $_POST["post_password"] = md5($_POST["post_password"].SALAGE);
    $user = verif_login($_POST);
    if (!$user){
        location("admin", "connexion", "connexion=nok");
    }
    else{
        $_SESSION["sp_superuser"] = $user;
        location("admin", "index", "connexion=ok");
    }
}
