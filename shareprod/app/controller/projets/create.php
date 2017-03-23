<?php
if (isset($_SESSION["sp_user"])){
    if (!isset($_POST["nom_create"])){
        $tabCats = lire_tables("sp_cat");
        include_once ("app/view/projets/create.php");
    }
    else {
        if (empty($_POST["nom_create"]) || empty($_POST["titre_create"]) || empty($_POST["logo_create"]) || empty($_POST["desxr_miniature_create"]) || empty($_POST["descr_create"]) || empty($_POST["image_create"]) || empty($_POST["financement_create"]) || empty($_POST["nom_valeur_create1"]) || empty($_POST["descr_valeur_create1"]) || empty($_POST["valeur_create1"]) || empty($_POST["nom_valeur_create2"]) || empty($_POST["descr_valeur_create2"]) || empty($_POST["valeur_create2"]) || empty($_POST["nom_valeur_create3"]) || empty($_POST["descr_valeur_create3"]) || empty($_POST["valeur_create3"])){
            location("projets", "create", "ChampsVide=nok");
        }
        if (!ctype_digit($_POST["valeur_create1"]) || !ctype_digit($_POST["valeur_create2"]) || !ctype_digit($_POST["valeur_create3"]) || !ctype_digit($_POST["financement_create"])){
            location("projets", "create", "Chiffre=nok");
        }
        $finProjet = date("Y-m-d H:i:s", strtotime('+30 day'));
        $insererProjet = insert_row("sp_projets", array("nom_projets"=>"'".$_POST["nom_create"]."'", "titre_projets"=>"'".$_POST["titre_create"]."'", "description_projets"=>"'".$_POST["descr_create"]."'", "date_fin_projets" => "'".$finProjet."'", "user_id_user" =>"'".$_SESSION["sp_user"]["id_users"]."'", "avancement_projets" => "'0'", "financement_max_projets" => "'".$_POST["financement_create"]."'"));


        $tabProjets = lire_tables("sp_projets", array("ORDER BY" => "id_projets", "ORDER" => "DESC"));
        $insererMiniature = insert_row("sp_miniature", array("nom_miniature"=>"'".$_POST["nom_create"]."'", "titre_miniature"=>"'".$_POST["titre_create"]."'", "sp_projets_id_projets"=>"'".$tabProjets[0]["id_projets"]."'"));
        $insererContribution11 = insert_row("sp_contributions", array("contrib_titre"=>"'".$_POST["nom_valeur_create1"]."'", "contrib_descr"=>"'".$_POST["descr_valeur_create1"]."'", "contrib_somme"=>"'".$_POST["valeur_create1"]."'","projets_id_projets"=>"'".$tabProjets[0]["id_projets"]."'"));
        $insererContribution12 = insert_row("sp_contributions", array("contrib_titre"=>"'".$_POST["nom_valeur_create2"]."'", "contrib_descr"=>"'".$_POST["descr_valeur_create2"]."'", "contrib_somme"=>"'".$_POST["valeur_create2"]."'","projets_id_projets"=>"'".$tabProjets[0]["id_projets"]."'"));
       $insererContribution13 = insert_row("sp_contributions", array("contrib_titre"=>"'".$_POST["nom_valeur_create3"]."'", "contrib_descr"=>"'".$_POST["descr_valeur_create3"]."'", "contrib_somme"=>"'".$_POST["valeur_create3"]."'","projets_id_projets"=>"'".$tabProjets[0]["id_projets"]."'"));

       if (!$insererProjet || !$insererMiniature || !$insererContribution11 || !$insererContribution12 || !$insererContribution13){
           location("projets", "create", "insert=nok");
       }
        location("projets", "detail", "id=".$tabProjets[0]['id_projets']."&insert=ok");
    }
}
else {
    location("users", "connexion", "pasConnecter=nok");
}
