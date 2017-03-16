<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15/03/2017
 * Time: 18:19
 */

if(!isset($_GET['page']))
{
    $page = 1;
}
else
{
    $page = $_GET["page"];
}

$offset = ($page - 1) * NB_PROJETS_PAGE;
$today = date("Y-m-d H:i:s");

$tabCategories = lire_tables("sp_cat");

if(!isset($_GET['cat']))
{
    $tabTables = ["sp_projets", "sp_miniature"];
    $tabOptions = ["id_projets", "sp_projets_id_projets"];
    $nbProjets = count_table("sp_projets");
    $tabProjets = lire_tables($tabTables, array("WHERE"=>$tabOptions, "ORDER BY"=>"date_fin_projets", "ORDER"=>"DESC", "LIMIT"=>NB_PROJETS_PAGE, "OFFSET"=>$offset));
    $option = "";
}
else
{
    $tabTables = ["sp_projets", "sp_miniature", "sp_cat_has_sp_projets"];
    $tabOptions = ["id_projets", "sp_miniature.sp_projets_id_projets", "id_projets", "sp_cat_has_sp_projets.sp_projets_id_projets", "sp_cat_id_cat", $_GET['cat']];
    $nbProjets = count_table($tabTables, array("WHERE"=>$tabOptions));
    $tabProjets = lire_tables($tabTables, array("WHERE"=>$tabOptions, "ORDER BY"=>"date_fin_projets", "ORDER"=>"DESC", "LIMIT"=>NB_PROJETS_PAGE, "OFFSET"=>$offset));
    $option = "&cat=".$_GET['cat'];
}

foreach ($tabProjets as $key=>$tabProjet) {
    $dateFin = $tabProjet["date_fin_projets"];
    $parseToday = date_create_from_format('Y-m-d H:i:s', $today);
    $parseDateFin = date_create_from_format('Y-m-d H:i:s', $dateFin);
    $parseToday->getTimestamp();
    $parseDateFin->getTimestamp();
    $interval = date_diff($parseToday, $parseDateFin);
    $tabProjets[$key][5] = $interval->format('%r%a');
}


if (sizeof($tabProjets) < 3){
    $affichage = sizeof($tabProjets);
}
else{
    $affichage = 3;
}
$i = 0;

include_once ("app/view/projets/projets.php");
