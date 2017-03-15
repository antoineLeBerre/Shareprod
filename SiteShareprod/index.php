<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login_user']) && !empty($_POST['login_user'])) && (isset($_POST['password_user']) && !empty($_POST['password_user']))) {

	$base = mysql_connect ('serveur', 'login_user', 'password');
	mysql_select_db ('mydb', $base);

	// on teste si une entrée de la base contient ce couple login_user / pass
	$sql = 'SELECT count(*) FROM user WHERE login_user="'.mysql_escape_string($_POST['login_user']).'" AND password_user_md5="'.mysql_escape_string(md5($_POST['password_user'])).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	// si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['login_user'] = $_POST['login_user'];
		header('Location: sp_user.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login_user, soit dans son mot de passe
	else if ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème
	else {
		$erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<html>
<head>
<title>Accueil</title>
</head>

<body>
Connexion à l'espace membre :<br />
<form action="index.php" method="post">
ID : <input type="text" name="login_user" value="<?php if (isset($_POST['login_user'])) echo htmlentities(trim($_POST['login_user'])); ?>"><br />
Mot de passe : <input type="password" name="password_user" value="<?php if (isset($_POST['password_user'])) echo htmlentities(trim($_POST['password_user'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="inscription.php">Vous inscrire</a>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>
