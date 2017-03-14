<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/03/2017
 * Time: 16:22
 */

include_once ("app/view/layout/header_admin.html")
?>

<div class="form">
         <form action="?module=admin&action=ajouter_user" method="post" class="niceform">

                <fieldset>
                    <dl>
                        <dt><label for="nom_user">Nom :</label></dt>
                        <dd><input type="text" name="nom_user" id="" size="54"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="prenom_user">Prenom :</label></dt>
                        <dd><input type="text" name="prenom_user" id="" size="54" /></dd>
                    </dl>


                    <dl>
                        <dt><label for="login_user">Login :</label></dt>
                        <dd><input type="text" name="login_user" id="" size="54"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="password_user">Mot de passe :</label></dt>
                        <dd><input type="text" name="password_user" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="email_user">E-mail :</label></dt>
                        <dd><input type="email" name="email_user" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="upload">Photo de profil :</label></dt>
                        <dd><input type="file" name="upload" id="upload" /></dd>
                    </dl>
                    <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>



                </fieldset>
         </form>
</div>

<?php include_once ("app/view/layout/footer_admin.html") ?>
