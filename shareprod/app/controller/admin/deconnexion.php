<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/03/2017
 * Time: 22:26
 */

if (!defined("BASE_URL")) die("ressource interdite");
session_destroy();
session_unset();
unset($_SESSION["sp_superuser"]);
location("admin", "index", "deconnexion=ok");