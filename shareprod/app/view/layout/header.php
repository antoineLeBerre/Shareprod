<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="webroot/css/reset.css">
	<link rel="stylesheet" href="webroot/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="webroot/js/search.js"></script>
</head>
<body>
<nav>
	<a href="?module=projets&action=index"><div class="logo"></div></a>
	<div class="center-nav">
		<a href="?module=projets&action=create"><div class="start">
			<div class="img-start"></div>
			Lancer un projet
		</div></a>
		<a href="?module=projets&action=projets"><div class="voir">
			<div class="img-voir"></div>
			Voir les projets
		</div></a></a>
        <?php if (!isset($_SESSION['sp_user']))
        { ?>
		<a href="?module=users&action=connexion"><div class="connexion">
			<div class="img-connexion"></div>
			Connexion
		</div></a>
        <?php }
        else
        { ?>
            <a href="?module=users&action=profil"><div class="monprofil">
                <div class="img-monprofil"></div>
                Mon Profil
            </div></a>
		<a href="?module=users&action=deconnexion"><div class="connexion">
			<div class="img-deconnexion"></div>
			Déconnexion
		</div></a>
        <?php } ?>
	</div>
	<div class="recherche">
		<input type="search" name="search"/>
		<div class="img-search"></div>
	</div>
</nav>
