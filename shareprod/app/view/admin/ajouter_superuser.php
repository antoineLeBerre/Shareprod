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
        <form action="?module=admin&action=ajouter_superuser" method="post" class="niceform">

            <fieldset>
                <dl>
                    <dt><label for="nom_superuser">Nom :</label></dt>
                    <dd><input type="text" name="nom_superuser" id="" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="prenom_superuser">Prenom :</label></dt>
                    <dd><input type="text" name="prenom_superuser" id="" size="54" /></dd>
                </dl>


                <dl>
                    <dt><label for="login_superuser">Login :</label></dt>
                    <dd><input type="text" name="login_superuser" id="" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="password_superuser">Mot de passe :</label></dt>
                    <dd><input type="text" name="password_superuser" id="" size="54" /></dd>
                </dl>
                <dl>
                    <dt><label for="email_superuser">E-mail :</label></dt>
                    <dd><input type="email" name="email_superuser" id="" size="54" /></dd>
                </dl>
                <dl>
                    <dt><label for="level_superuser">Projet :</label></dt>
                    <dd>
                        <select size="1" name="level_superuser" id="">
                            <option value="1">Administrateur</option>
                            <option value="2">Moderateur</option>
                        </select>
                    </dd>
                </dl>
                <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </dl>



            </fieldset>
        </form>
    </div>

<?php include_once ("app/view/layout/footer_admin.html") ?>
