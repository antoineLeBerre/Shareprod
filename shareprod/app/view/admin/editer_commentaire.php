<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

<div class="form">
    <form action="?module=admin&action=editer_commentaire&id_commentaire=<?= $tabCommentaires[0]["id_commentaire"] ?>" method="post" class="niceform">

        <fieldset>
            <dl>
                <dt><label for="contenu_commentaire">Contenu :</label></dt>
                <dd><textarea name="contenu_commentaire" id="comments" rows="5" cols="36"><?= htmlspecialchars($tabCommentaires[0]["content_commentaire"]) ?></textarea></dd>
            </dl>
            <dl>
                <dt><label for="auteur_commentaire">Utilisateur :</label></dt>
                <dd>
                    <select size="1" name="auteur_commentaire" id="">
                        <?php foreach ($tabUsers as $tabUser) {
                            if ($tabUser["id_users"] == $tabCommentaires[0]["user_id_user"]){ ?>
                                <option selected value=<?= $tabUser["id_users"] ?>><?= $tabUser["login_users"]?></option>
                            <?php }
                            else { ?>
                            <option value=<?= $tabUser["id_users"] ?>><?= $tabUser["login_users"]?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="projet_commentaire">Projet :</label></dt>
                <dd>
                    <select size="1" name="projet_commentaire" id="">
                        <?php foreach ($tabProjets as $tabProjet) {
                            if ($tabProjet["id_projets"] == $tabCommentaires[0]["projets_id_projets"]){?>
                                <option selected value=<?= $tabProjet["id_projets"] ?>><?= $tabProjet["nom_projets"]?></option>
                            <?php }
                            else { ?>
                                <option value=<?= $tabProjet["id_projets"] ?>><?= $tabProjet["nom_projets"]?></option>
                            <?php } ?>
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

<?php include_once ("app/view/layout/footer_admin.html") ?>