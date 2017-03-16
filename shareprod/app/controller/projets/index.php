<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14/03/2017
 * Time: 10:48
 */

$tabTables = ["sp_projets", "sp_miniature"];
$tabOptions = ["id_projets", "sp_projets_id_projets"];
$tabProjets = lire_tables($tabTables, array("WHERE"=>$tabOptions, "ORDER BY"=>"date_fin_projets", "ORDER"=>"DESC", "LIMIT"=>"3"));
$tabCategories = lire_tables("sp_cat");
$tabUsers = lire_tables("sp_users", array("LIMIT"=>"3"));
$today = date("Y-m-d H:i:s");

foreach ($tabProjets as $key=>$tabProjet) {
    $dateFin = $tabProjet["date_fin_projets"];
    $parseToday = date_create_from_format('Y-m-d H:i:s', $today);
    $parseDateFin = date_create_from_format('Y-m-d H:i:s', $dateFin);
    $parseToday->getTimestamp();
    $parseDateFin->getTimestamp();
    $interval = date_diff($parseToday, $parseDateFin);
    $tabProjets[$key][5] = $interval->format('%r%a');
}

include_once ("app/view/projets/index.php");
