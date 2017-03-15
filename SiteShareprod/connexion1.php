<?php
/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1) */
header('Content-type: text/html; charset=UTF-8');

/* Création d'une fonction - utilisée dans la récupération des variables - qui teste la configuration get_magic_quotes_gpc du serveur.
Si oui, supprime avec la fonction stripslashes les antislashes "\" insérés dans les chaines de caractère des variables gpc (GET, POST, COOKIE) */
function Verif_magicquotes ($chaine)
{
if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);

return $chaine;
}

/* Initialisation du message de réponse */
$message = null;


/* Si le formulaire est envoyé */
if (isset($_POST['nom_user ']))
{

    /* Récupération des variables issues du formulaire
    Teste l'existence des données post en vérifiant qu'elles existent, qu'elles sont non vides et non composées uniquement d'espaces.
    (Ce dernier point est facultatif et l'on pourrait se passer d'utiliser la fonction trim())
    En cas de succès, on applique notre fonction Verif_magicquotes pour (éventuellement) nettoyer la variable */
    $pseudo = (isset($_POST['nom_user ']) && trim($_POST['nom_user ']) != '')? Verif_magicquotes($_POST['nom_user ']) : null;
    $pass = (isset($_POST['password_user']) && trim($_POST['password_user']) != '')? Verif_magicquotes($_POST['password_user']) : null;


    /* Si $pseudo et $pass différents de null */
    if(isset($pseudo,$pass))
    {
         /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation */
         $hostname = "http://abonnaud.eemi.tech ";
         $database = "mydb";
         $username = "root";
         $password = "";

         $connection = mysql_connect($hostname, $username, $password) or die(mysql_error());

         /* Connexion à la base */
         mysql_select_db($database, $connection);

         /* Indique à mySql de travailler en UTF-8 (par défaut mySql risque de travailler au standard ISO-8859-1) */
         mysql_query("SET NAMES 'utf8'");

         /* Préparation des données pour les requêtes à l'aide de la fonction mysql_real_escape_string */
         $nom = mysql_real_escape_string($pseudo);
         $password = mysql_real_escape_string($pass);


         /* Requête pour récupérer les enregistrements répondant à la clause :
         champ du pseudo et champ du mdp de la table = pseudo et mdp postés dans le formulaire*/
        $requete = "SELECT * FROM user WHERE nom_user  = '".$nom."' AND password_user = '".$password."'";

         /* Exécution de la requête */
         $req_exec = mysql_query($requete) or die(mysql_error());

         /* Création du tableau associatif du résultat */
         $resultat = mysql_fetch_assoc($req_exec);

         /* Les valeurs (si elles existent) sont retournées dans le tableau $resultat;  */
         if (isset($resultat['nom_user'],$resultat['password_user']))
               {
                 /* Démarre la session et enregistre le pseudo dans la variable de session $_SESSION['login_user']
                 qui donne au visiteur la possibilité de visiter les pages protégées.  */
                 session_start();
                 $_SESSION['login_user'] = $pseudo;

                 /* A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle. */
                 $message = 'Bonjour '.htmlspecialchars($_SESSION['login_user']).' <a href = "#">Cliquez ici pour vous connecter</a>';
                }
                else
                {   /* Le pseudo ou le mot de passe sont incorrect */
                $message = 'Le pseudo ou le mot de passe sont incorrect';
                }

    }
    else
    {  /* au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli */
    $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formulaire de connexion</title>
<style type="text/css">
<!--
body, p, h1,form, input {
margin:0;
padding:0;
}
body {
background-color:#FFFFFF
}
#connexion {
width:380px;
background:#FFFFFF;
margin:20px auto;
font-family: Arial;
font-size:1em;
border:2px solid #333333;
}
#connexion h1 {
text-align:center;
font-size:1.2em;
background:#333333;
padding-bottom:5px;
margin-bottom:15px;
color:#FFFFFF;
letter-spacing:0.05em;
}
#connexion p {
padding-top:15px;
padding-right:50px;
text-align:right;
}
#connexion input {
margin-left:30px;
width:150px;
}
#connexion #valider {
width:155px;
font-size:0.8em;
}
#connexion #message {
height:27px;
font-size:0.7em;
font-weight:bold;
text-align:center;
padding:10px 0 0 0;
}

</style>
</head>
<body>
<div id = "connexion">
    <form action = "#" method="post">
    <h1>Connexion</h1>
    <p><label for = "nom_user ">Pseudo : </label><input type="text" name="pseudo" id="pseudo" /></p>
    <p><label for = "password_user">Mot de passe : </label><input type="password" name="password_user" id="pass" /></p>
    <p><input type="submit" value="Envoyer" id = "valider" /></p>
    </form>
    <p id = "message"><?php if(isset($message)) echo $message ?></p>
</div>
</body>
</html>
