<?php include_once ("app/view/layout/header.php") ?>

<div class="connexion">
	<h2>Connexion</h2>
	<form action="?module=users&action=connexion" method="post" class="form-connexion">
		<input type="text" name="post_login" placeholder="Nom d'utilisateur" required />
		<input type="password" name="post_password" placeholder="Mot de passe" required />
		<input type="submit" value="Se connecter" class="btn-connexion"/>
	</form>
    <a href="">Mot de passe oublié ?</a>
</div>
<div class="inscription">
	<form action="?module=users&action=inscription" method="post" class="form-inscription">
		<input type="text" name="nom_user" placeholder="Nom" required />
		<input type="text" name="prenom_user" placeholder="Prénom" required />
		<input type="email" name="email_user" placeholder="E-mail" required />
		<input type="text" name="login_user" placeholder="Nom d'utilisateur" required />
		<input type="password" name="password_user" placeholder="Mot de passe" required />
		<input type="password" name="verifPassword_user" placeholder="Répéter mot de passe" required />
		<input type="checkbox" name="check_CGU" required /><a href="">J'accepte les Conditions Générales d'Utilisation</a>
		<input type="submit" value="C'est parti !" class="btn-inscription"/>
	</form>
	<a href=""><div class="btn-connect-facebook"></div></a>
	<a href=""><div class="btn-connect-twitter"></div></a>
</div>

<?php include_once ("app/view/layout/footer.php") ?>
