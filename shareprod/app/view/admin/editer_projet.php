<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

<div class="form">
    <form action="?module=admin&action=editer_projet&id_projet=<?= $tabProjets[0]["id_projets"] ?>" method="post" class="niceform">
        <fieldset>
            <dl>
                <dt><label for="nom_projet">Nom du projet :</label></dt>
                <dd><input type="text" name="nom_projet" value="<?= $tabProjets[0]['nom_projets'] ?>" size="54"/></dd>
            </dl>
            <dl>
                <dt><label for="titre_projet">Titre du prijet :</label></dt>
                <dd><input type="text" name="titre_projet" value="<?= $tabProjets[0]['titre_projets'] ?>" size="54" /></dd>
            </dl>
            <dl>
                <dt><label for="description_projet">Description :</label></dt>
                <dd><textarea name="description_projet" id="comments" rows="5" cols="36"><?= $tabProjets[0]['description_projets']?></textarea></dd>
            </dl>
            <dl>
                <dt><label for="login_projet">Utilisateur :</label></dt>
                <dd>
                    <select size="1" name="login_projet" id="">
                        <?php foreach ($tabUsers as $tabUser) {
                            if ($tabUser["id_users"] == $tabProjets[0]['user_id_user']){?>
                                <option selected value=<?= $tabUser["id_users"] ?>><?= $tabUser["login_users"]?></option>
                            <?php }
                            else {?>
                                <option value=<?= $tabUser["id_users"] ?>><?= $tabUser["login_users"]?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="montant_projet">Montant Maximum :</label></dt>
                <dd><input type="number" name="montant_projet" value="<?= $tabProjets[0]['financement_max_projets'] ?>" size="54"/></dd>
            </dl>
            <dl class="submit">
                <input type="submit" name="submit" id="submit" value="Submit" />
            </dl>
        </fieldset>
    </form>
</div>

<?php include_once ("app/view/layout/footer_admin.html") ?>
