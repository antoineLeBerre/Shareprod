<?php
if (!defined("BASE_URL")) die("ressource interdite");
session_destroy();
session_unset();
unset($_SESSION["sp_user"]);
location("projets", "index", "deconnexion=ok");