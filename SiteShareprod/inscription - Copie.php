<?php
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	if ((isset($_POST['login_user']) && !empty($_POST['login_user'])) && (isset($_POST['password_user']) && !empty($_POST['password_user'])) && (isset($_POST['password_user_confirm']) && !empty($_POST['password_user_confirm']))) {
	if ($_POST['password_user'] != $_POST['password_user_confirm']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}

	else
	{
		$base = mysql_connect ('serveur', 'login_user', 'password');
		mysql_select_db ('mydb', $base);

		$request = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		$data = mysql_fetch_array($req);
		$sql = 'SELECT count(*) FROM user WHERE login_user="'.mysql_escape_string($_POST['login_user']).'"';

		if ($data[0] == 0) {
		$sql = 'INSERT INTO sp_user VALUES("", "'.mysql_escape_string($_POST['login_user']).'", "'.mysql_escape_string(md5($_POST['password_user'])).'")';
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		session_start();
		$_SESSION['login_users'] = $_POST['login_user'];
		header('Location: sp_user.php');
		exit();
		}
		else {
		$erreur = 'Ce login est déjà pris.';
		}
	}
	}
	else {
	$erreur = "Au moins un des champs n'a pas été rempli.";
	}
}
?>

<html>
<head>
<title>Inscription</title>
</head>

<body>
Inscription à l'espace membre de Shareprod :<br />
<form action="inscription.php" method="post">
ID : <input type="text" name="login_user" value="<?php if (isset($_POST['login_user'])) echo htmlentities(trim($_POST['login_user'])); ?>"><br />
Mot de passe : <input type="password" name="password_user" value="<?php if (isset($_POST['password_user'])) echo htmlentities(trim($_POST['password_user'])); ?>"><br />
Confirmation du mot de passe : <input type="password" name="password_user_confirm" value="<?php if (isset($_POST['password_user_confirm'])) echo htmlentities(trim($_POST['password_user_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</form>
<?php
if (isset($erreur)) echo '<br />', $erreur;
?>
</body>
</html>
