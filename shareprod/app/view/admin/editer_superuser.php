<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

    <div class="form">
        <form action="?module=admin&action=editer_superuser&id_superuser=<?= $tabSuperusers[0]["id_superusers"] ?>" method="post" class="niceform">

            <fieldset>
                <dl>
                    <dt><label for="nom_superuser">Nom :</label></dt>
                    <dd><input type="text" name="nom_superuser" value="<?= $tabSuperusers[0]['nom_superusers'] ?>" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="prenom_superuser">Prenom :</label></dt>
                    <dd><input type="text" name="prenom_superuser" value="<?= $tabSuperusers[0]['prenom_superusers'] ?>" size="54" /></dd>
                </dl>


                <dl>
                    <dt><label for="login_superuser">Login :</label></dt>
                    <dd><input type="text" name="login_superuser" value="<?= $tabSuperusers[0]['login_superusers'] ?>" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="password_superuser">Mot de passe :</label></dt>
                    <dd><input type="text" name="password_superuser" value="<?= $tabSuperusers[0]['password_superusers'] ?>" size="54" /></dd>
                </dl>
                <dl>
                    <dt><label for="email_superuser">E-mail :</label></dt>
                    <dd><input type="email" name="email_superuser" value="<?= $tabSuperusers[0]['email_superusers'] ?>" size="54" /></dd>
                </dl>
                <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </dl>



            </fieldset>
        </form>
    </div>

<?php include_once ("app/view/layout/footer_admin.html") ?>