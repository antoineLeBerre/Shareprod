<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/03/2017
 * Time: 16:22
 */

include_once ("app/view/layout/header.html")
?>

<div class="form">
    <form action="?module=admin&action=ajouter_commentaire" method="post" class="niceform">

        <fieldset>
            <dl>
                <dt><label for="contenu_commentaire">Contenu :</label></dt>
                <dd><textarea name="contenu_commentaire" id="comments" rows="5" cols="36"></textarea></dd>
            </dl>
            <dl>
                <dt><label for="auteur_commentaire">Utilisateur :</label></dt>
                <dd>
                    <select size="1" name="auteur_commentaire" id="">
                        <?php foreach ($tabUsers as $tabUser) { ?>
                            <option value=<?= $tabUser["id_users"] ?>><?= $tabUser["login_users"]?></option>
                        <?php } ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="projet_commentaire">Projet :</label></dt>
                <dd>
                    <select size="1" name="projet_commentaire" id="">
                        <?php foreach ($tabProjets as $tabProjet) { ?>
                            <option value=<?= $tabProjet["id_projets"] ?>><?= $tabProjet["nom_projets"]?></option>
                        <?php } ?>
                    </select>
                </dd>
            </dl>
            <dl class="submit">
                <input type="submit" name="submit" id="submit" value="Submit" />
            </dl>



        </fieldset>
    </form>
</div>

<?php include_once ("app/view/layout/footer.html") ?>
