<?php 
	include "header.php";
?>
<div class="content-page-connexion">
	<div class="connexion-content">
	<div class="connexion-bg">
			<h4 class="white">Connexion</h4>
			<form action="" class="form-connexion">
				<input type="text" name="" placeholder="Nom d'utilisateur" required />
				<input type="password" name="" placeholder="Mot de passe" required />
				<a href="">Mot de passe oublié ?</a>
				<input type="submit" value="Login" class="btn-connexion"/>
			</form>
		</div>
	</div>
	<div class="inscription-content">
		<div class="inscription-bg">
			<h4 class="black">Inscription</h4>
			<form action="" class="form-inscription">
				<input type="text" name="" placeholder="Nom" required />
				<input type="text" name="" placeholder="Prénom" required />
				<input type="mail" name="" placeholder="E-mail" required />
				<input type="text" name="" placeholder="Nom d'utilisateur" required />
				<input type="password" name="" placeholder="Mot de passe" required />
				<input type="password" name="" placeholder="Répéter mot de passe" required />
				<div class="cgu-accept"><input type="checkbox" name="" required /><a href="">J'accepte les CGU</a></div>
				<input type="submit" value="S'inscrire" class="btn-inscription"/>
			</form>
			<a href=""><div class="btn-connect-facebook"></div></a>
			<a href=""><div class="btn-connect-twitter"></div></a>
		</div>
	</div>
</div>
<?php 
	include "footer.php";
?>