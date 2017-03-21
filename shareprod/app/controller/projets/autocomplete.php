<?php
    if(isset($_GET['query'])) {
        $q = htmlentities($_GET['query']);

        try {
            //	$connect = "mysql:host=localhost;port=3306;dbname=aleberre_shareprod";
            //	$login = "aleberre";
            //  $pass = "8MqvxVPHzS"; //Connextion serveur
            $connect = "mysql:host=localhost;port=3306;dbname=sp_shareprod";
            $login = "root";
            $pass = ""; //Connexion local
            $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $pdo = new PDO($connect, $login, $pass, $option);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        $requete = "SELECT * FROM sp_projets WHERE titre_projets LIKE '". $q ."%' LIMIT 0, 10";
        $resultat = $pdo->query($requete) or die(print_r($bdd->errorInfo()));

        while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $propose['suggestions'][] = $donnees['test'];
        }

        echo json_encode($propose);
    }
