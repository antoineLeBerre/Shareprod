<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/03/2017
 * Time: 23:29
 */


if (!isset($_POST["nom_projet"])){
    $tabProjets = lire_tables("sp_users");
    include_once ("app/view/admin/ajouter_projet.php");
}
else{

    if (empty($_POST["nom_projet"]) || empty($_POST["titre_projet"]) || empty($_POST["description_projet"]) ){
        location("admin", "ajouter_projet", "champVide=nok");
    }
    $finProjet = date("Y-m-d H:i:s", strtotime('+30 day'));
    $inserer = insert_row("sp_projets", array("nom_projets"=>"'".$_POST["nom_projet"]."'", "titre_projets"=>"'".$_POST["titre_projet"]."'", "description_projets"=>"'".$_POST["description_projet"]."'", "date_fin_projets" => "'".$finProjet."'", "user_id_user" => $_POST["login_projet"], "avancement_projets" => "'0'"));

    if (!$inserer){
        location("admin", "ajouter_projet", "&insert=nok");
    }
    location("admin", "afficher_projets", "&insert=ok");
}