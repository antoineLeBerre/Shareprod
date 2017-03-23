<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

<div class="form">
    <form action="?module=admin&action=connexion" method="post" class="niceform">
        <fieldset>
            <dl>
                <dt><label for="post_login">Login :</label></dt>
                <dd><input type="text" name="post_login" id="" size="54"/></dd>
            </dl>
            <dl>
                <dt><label for="post_password">Mot de passe :</label></dt>
                <dd><input type="text" name="post_password" id="" size="54" /></dd>
            </dl>

            <dl class="submit">
                <input type="submit" name="submit" id="submit" value="Submit" />
            </dl>
        </fieldset>
    </form>
</div>

<?php include_once ("app/view/layout/footer_admin.html") ?>
