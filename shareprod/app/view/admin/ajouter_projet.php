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
        <form action="?module=admin&action=ajouter_projet" method="post" class="niceform">

            <fieldset>
                <dl>
                    <dt><label for="nom_projet">Nom du projet :</label></dt>
                    <dd><input type="text" name="nom_projet" id="" size="54"/></dd>
                </dl>
                <dl>
                    <dt><label for="titre_projet">Titre du prijet :</label></dt>
                    <dd><input type="text" name="titre_projet" id="" size="54" /></dd>
                </dl>
                <dl>
                    <dt><label for="description_projet">Description :</label></dt>
                    <dd><textarea name="description_projet" id="comments" rows="5" cols="36"></textarea></dd>
                </dl>
                <dl>
                    <dt><label for="login_projet">Utilisateur :</label></dt>
                    <dd>
                        <select size="1" name="login_projet" id="">
                            <?php foreach ($tabProjets as $tabProjet) { ?>
                                <option value=<?= $tabProjet["id_users"] ?>><?= $tabProjet["login_users"]?></option>
                            <?php } ?>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt><label for="montant_projet">Montant Maximum :</label></dt>
                    <dd><input type="number" name="montant_projet" id="" size="54"/></dd>
                </dl>
                <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </dl>



            </fieldset>
        </form>
    </div>

<?php include_once ("app/view/layout/footer_admin.html") ?>
