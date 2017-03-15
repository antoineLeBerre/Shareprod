<?php

header('Content-type: text/html; charset=UTF-8');


function Verif_magicquotes ($chaine)
{
if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);

return $chaine;
}


$message = null;



if (isset($_POST['nom_user ']))
{


    $pseudo = (isset($_POST['nom_user ']) && trim($_POST['nom_user ']) != '')? Verif_magicquotes($_POST['nom_user ']) : null;
    $pass = (isset($_POST['password_user']) && trim($_POST['password_user']) != '')? Verif_magicquotes($_POST['password_user']) : null;



    if(isset($pseudo,$pass))
    {

         $hostname = "http://abonnaud.eemi.tech ";
         $database = "mydb";
         $username = "root";
         $password = "";

         $connection = mysql_connect($hostname, $username, $password) or die(mysql_error());

         /* Connexion à la base */
         mysql_select_db($database, $connection);


         mysql_query("SET NAMES 'utf8'");


         $nom = mysql_real_escape_string($pseudo);
         $password = mysql_real_escape_string($pass);



        $requete = "SELECT * FROM user WHERE nom_user  = '".$nom."' AND password_user = '".$password."'";


         $req_exec = mysql_query($requete) or die(mysql_error());


         $resultat = mysql_fetch_assoc($req_exec);


         if (isset($resultat['nom_user'],$resultat['password_user']))
               {

                 session_start();
                 $_SESSION['login_user'] = $pseudo;


                 $message = 'Bonjour '.htmlspecialchars($_SESSION['login_user']).' <a href = "#">Cliquez ici pour vous connecter</a>';
                }
                else
                {
                $message = 'Le pseudo ou le mot de passe sont incorrect';
                }

    }
    else
    {
    $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formulaire de connexion</title>
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
