<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/03/2017
 * Time: 01:02
 */
	$connect = "mysql:host=localhost;port=3306;dbname=aleberre_shareprod";
	$login = "aleberre";
	$pass = "8MqvxVPHzS"; //Connextion serveur
//$connect = "mysql:host=localhost;port=3306;dbname=sp_shareprod";
//$login = "root";
//$pass = ""; //Connexion local
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($connect, $login, $pass, $option);

    $query = $pdo->prepare("UPDATE sp_users
                                SET nom_users = 'toto'");
    $query->execute();

    $query->closeCursor();