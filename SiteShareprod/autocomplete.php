<?php
    if(isset($_GET['query'])) {
        $q = htmlentities($_GET['query']);

        try {
            $bdd = new PDO('test');
        } catch(Exception $e) {
            exit('Impossible de se connecter à la base de données !');
        }

        $requete = "SELECT * FROM test WHERE test LIKE '". $q ."%' LIMIT 0, 10";
        $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

        while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $propose['suggestions'][] = $donnees['test'];
        }

        echo json_encode($propose);
    }
?>
