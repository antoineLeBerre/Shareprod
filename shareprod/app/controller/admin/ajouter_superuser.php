<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/03/2017
 * Time: 23:29
 */


if (!isset($_POST["login_superuser"])){
    include_once ("app/view/admin/ajouter_superuser.php");
}
else{
    if (empty($_POST["nom_superuser"]) || empty($_POST["prenom_superuser"]) || empty($_POST["login_superuser"]) || empty($_POST["password_superuser"]) || empty($_POST["email_superuser"])){
        location("admin", "ajouter_superuser", "champVide=nok");
    }
    $_POST["password_superuser"] = md5($_POST["password_superuser"].SALAGE);
    $inserer = insert_row("sp_superusers", array("nom_superusers"=>"'".$_POST["nom_superuser"]."'", "prenom_superusers"=>"'".$_POST["prenom_superuser"]."'", "login_superusers"=>"'".$_POST["login_superuser"]."'", "password_superusers" => "'".$_POST["password_superuser"]."'",  "email_superusers" => "'".$_POST["email_superuser"]."'", "level_superusers" => "'".$_POST["level_superuser"]."'"));

    if (!$inserer){
        location("admin", "ajouter_superuser", "&insert=nok");
    }
    location("admin", "afficher_superusers", "&insert=ok");
}
