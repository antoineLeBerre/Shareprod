<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/03/2017
 * Time: 23:51
 */
if (!defined("BASE_URL")) die("ressource interdite");

if (isset($_GET["id"])){
    $tablesProjetsContrib = ["sp_projets", "sp_contributions"];
    $optionsProjetsContrib = ["id_projets", $_GET["id"],"id_projets", "projets_id_projets"];
    $tabProjetsContrib = lire_tables($tablesProjetsContrib, array("WHERE"=>$optionsProjetsContrib));

    include ("app/view/payment/finance.php");
}


