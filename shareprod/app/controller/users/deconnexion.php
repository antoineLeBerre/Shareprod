<?php
if (!defined("BASE_URL")) die("ressource interdite");
protection("sp_user", "projets", "index");
session_destroy();
session_unset();
unset($_SESSION["sp_user"]);
location("projets", "index", "deconnexion=ok");