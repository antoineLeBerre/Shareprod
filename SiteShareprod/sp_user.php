<?php
session_start();
if (!isset($_SESSION['login_user'])) {
	header ('Location: index.php');
	exit();
}
?>

<html>
<head>
<title>Espace membre</title>
</head>
<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['login_user'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>
