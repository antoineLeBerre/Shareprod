<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/03/2017
 * Time: 23:40
 */

$tab = ["1", "2", "3", "4", "5", "6", "7", "8"];
$tables = ["sp_users", "sp_projets"];
//$tableUsers = lire_tables("sp_users");
$tabProjet = lire_tables($tables, array("WHERE"=>$tab, "ORDER"));

include_once ("app/view/admin/index.php");