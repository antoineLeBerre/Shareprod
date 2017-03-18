<?php include_once ("app/view/layout/header.php") ?>

<div class="content-page-connexion">
    <div class="connexion-content">
        <div class="connexion-bg">
            <h4 class="white">Connexion</h4>
            <form action="?module=users&action=connexion" method="post" class="form-connexion">
                <input type="text" name="post_login" placeholder="Nom d'utilisateur" required />
                <input type="password" name="post_password" placeholder="Mot de passe" required />
                <a href="">Mot de passe oublié ?</a>
                <input type="submit" value="Login" class="btn-connexion"/>
            </form>
        </div>
    </div>
    <div class="inscription-content">
        <div class="inscription-bg">
            <h4 class="black">Inscription</h4>
            <form action="?module=users&action=inscription" method="post" class="form-inscription">
                <input type="text" name="nom_user" placeholder="Nom" required />
                <input type="text" name="prenom_user" placeholder="Prénom" required />
                <input type="email" name="email_user" placeholder="E-mail" required />
                <input type="text" name="login_user" placeholder="Nom d'utilisateur" required />
                <input type="password" name="password_user" placeholder="Mot de passe" required />
                <input type="password" name="verifPassword_user" placeholder="Répéter mot de passe" required />
                <div class="cgu-accept"><input type="checkbox" name="check_CGU" required /><a href="">J'accepte les CGU</a></div>
                <input type="submit" value="S'inscrire" class="btn-inscription"/>
            </form>
            <a href=""><div class="btn-connect-facebook"></div></a>
            <a href=""><div class="btn-connect-twitter"></div></a>
        </div>
    </div>
</div>
<?php include_once ("app/view/layout/footer.php") ?>
