<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

    <div class="form">
        <form action="?module=admin&action=editer_user&id_user=<?= $tabUsers[0]["id_users"] ?>" method="post" class="niceform">

            <fieldset>
                <dl>
                    <dt><label for="nom_user">Nom :</label></dt>
                    <dd><input type="text" name="nom_user" value="<?= $tabUsers[0]['nom_users'] ?>" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="prenom_user">Prenom :</label></dt>
                    <dd><input type="text" name="prenom_user" value="<?= $tabUsers[0]['prenom_users'] ?>" size="54" /></dd>
                </dl>


                <dl>
                    <dt><label for="login_user">Login :</label></dt>
                    <dd><input type="text" name="login_user" value="<?= $tabUsers[0]['login_users'] ?>" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="password_user">Mot de passe :</label></dt>
                    <dd><input type="text" name="password_user" value="<?= $tabUsers[0]['password_users'] ?>" size="54" /></dd>
                </dl>
                <dl>
                    <dt><label for="email_user">E-mail :</label></dt>
                    <dd><input type="email" name="email_user" value="<?= $tabUsers[0]['email_users'] ?>" size="54" /></dd>
                </dl>
                <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </dl>



            </fieldset>
        </form>
    </div>

<?php include_once ("app/view/layout/footer_admin.html") ?>