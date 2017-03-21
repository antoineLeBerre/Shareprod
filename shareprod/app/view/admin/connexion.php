<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/03/2017
 * Time: 16:22
 */

include_once ("app/view/layout/header_admin.php")
?>

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
