<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/03/2017
 * Time: 01:52
 */
if (!defined("BASE_URL")) die("ressource interdite");

if (isset($_GET["id"])){
    $tablesProjets = ["sp_projets", "sp_users"];
    $optionsProjets = ["id_projets", $_GET["id"],"id_users", "sp_projets.user_id_user"];
    $tabProjets = lire_tables($tablesProjets, array("WHERE"=>$optionsProjets));
    $tablesProjetsContrib = ["sp_projets", "sp_contributions"];
    $optionsProjetsContrib = ["id_projets", $_GET["id"],"id_projets", "projets_id_projets"];
    $tabProjetsContrib = lire_tables($tablesProjetsContrib, array("WHERE"=>$optionsProjetsContrib));
    $tablesProjetsCat = ["sp_projets", "sp_cat_has_sp_projets", "sp_cat"];;
    $optionsProjetsCat = ["id_projets", $_GET["id"],"id_projets", "sp_projets_id_projets", "id_cat", "sp_cat_id_cat"];
    $tabProjetsCat = lire_tables($tablesProjetsCat, array("WHERE"=>$optionsProjetsCat));
    $tablesProjetsCommentaire = ["sp_projets", "sp_users", "sp_commentaire"];;
    $optionsProjetsCommentaire = ["id_projets", $_GET["id"],"id_projets", "sp_commentaire.projets_id_projets", "id_users", "sp_commentaire.user_id_user"];
    $tabProjetsCommentaire = lire_tables($tablesProjetsCommentaire, array("WHERE"=>$optionsProjetsCommentaire, "ORDER BY"=>"date_commentaire", "ORDER"=>"DESC"));
    $today = date("Y-m-d H:i:s");

    $pourcent = ($tabProjets[0]["avancement_projets"] / $tabProjets[0]["financement_max_projets"])*100;
    $dateFin = $tabProjets[0]["date_fin_projets"];
    $parseToday = date_create_from_format('Y-m-d H:i:s', $today);
    $parseDateFin = date_create_from_format('Y-m-d H:i:s', $dateFin);
    $parseToday->getTimestamp();
    $parseDateFin->getTimestamp();
    $interval = date_diff($parseToday, $parseDateFin);
    $restant = $interval->format('%r%a');

    include_once ("app/view/projets/detail.php");
}
else{
    location("projets", "projets", "MissID=nok");
}