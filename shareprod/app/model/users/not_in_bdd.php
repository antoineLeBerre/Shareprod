<?php
if (!defined("BASE_URL")) die("ressource interdite");
function verif_login($login)
{
    global $pdo;

//	var_dump($pdo);
//	die();
    try
    {
        $query = $pdo->prepare("SELECT * FROM sp_users
								WHERE login_users = :login OR email_users = :password");
        $query->bindValue(':login', $login["post_login"], PDO::PARAM_STR);
        $query->bindValue(':password', $login["post_email"], PDO::PARAM_STR);
        $query->execute();

        $users = $query->fetchAll();
        $query->closeCursor();
        if (empty($users) || sizeof($users) > 1)
        {
            return true;
        }
        else
        {
            return false;
        }

    } catch (Exception $e) {
        echo "Erreur Login".$e->getMessage();
    }
}
