<?php 
	include "header.php";
?>

<div class="connexion">
	<h2>Connexion</h2>
	<form action="" class="form-connexion">
		<input type="text" name="" placeholder="Nom d'utilisateur" required />
		<input type="password" name="" placeholder="Mot de passe" required />
		<a href="">Mot de passe oublié ?</a>
		<input type="submit" value="Se connecter" class="btn-connexion"/>
	</form>
</div>
<div class="inscription">
	<form action="" class="form-inscription">
		<input type="text" name="" placeholder="Nom" required />
		<input type="text" name="" placeholder="Prénom" required />
		<input type="mail" name="" placeholder="E-mail" required />
		<input type="text" name="" placeholder="Nom d'utilisateur" required />
		<input type="password" name="" placeholder="Mot de passe" required />
		<input type="password" name="" placeholder="Répéter mot de passe" required />
		<a href="">Mot de passe oublié ?</a>
		<input type="checkbox" name="" required /><a href="">J'accepte les Conditions Générales d'Utilisation</a>
		<input type="submit" value="C'est parti !" class="btn-inscription"/>
	</form>
	<a href=""><div class="btn-connect-facebook"></div></a>
	<a href=""><div class="btn-connect-twitter"></div></a>
</div>

<?php 
	include "footer.php";
?>