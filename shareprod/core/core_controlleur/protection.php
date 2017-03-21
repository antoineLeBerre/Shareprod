<?php 
if (!defined("BASE_URL")) die("ressource interdite");
function protection($session, $module, $action)
{
  if (!isset($_SESSION[$session]))
  {
    location($module, $action, "acces=ok");
  }
}