<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/03/2017
 * Time: 23:29
 */
if (!defined("BASE_URL")) die("ressource interdite");

if (!isset($_POST["contenu_commentaire"])){
    $tabUsers = lire_tables("sp_users");
    $tabProjets = lire_tables("sp_projets");
    include_once ("app/view/admin/ajouter_commentaire.php");
}
else{
    if (empty($_POST["contenu_commentaire"])){
        location("admin", "ajouter_commentaire", "champVide=nok");
    }
    $inserer = insert_row("sp_commentaire", array("content_commentaire" => "'".$_POST["contenu_commentaire"]."'", "user_id_user" => $_POST["auteur_commentaire"], "projets_id_projets" => $_POST["projet_commentaire"]));

    if (!$inserer){
        location("admin", "ajouter_commentaire", "&insert=nok");
    }
    else{
        location("admin", "afficher_commentaires", "&insert=ok");
    }
}
