<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

    <div class="right_content">

        <h2>Affichage des tables de la BDD</h2>

        <h3>Table Utilisateurs</h3>
        <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead>
            <tr>
                <th scope="col" class="rounded">Nom</th>
                <th scope="col" class="rounded">Prenom</th>
                <th scope="col" class="rounded">Login</th>
                <th scope="col" class="rounded">Password</th>
                <th scope="col" class="rounded">Date d'inscription</th>
                <th scope="col" class="rounded">E-mail</th>
                <th scope="col" class="rounded">Description</th>
                <th scope="col" class="rounded">Avatar</th>
                <th scope="col" class="rounded">Temoignage</th>
                <th scope="col" class="rounded">Edit</th>
                <th scope="col" class="rounded-q4">Delete</th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            <?php
            foreach ($tableUsers as $tableUser){
                ?>
                <tr>
                    <td><?= $tableUser["nom_users"] ?></td>
                    <td><?= $tableUser["prenom_users"] ?></td>
                    <td><?= $tableUser["login_users"] ?></td>
                    <td><?= $tableUser["password_users"] ?></td>
                    <td><?= $tableUser["date_inscription_users"] ?></td>
                    <td><?= $tableUser["email_users"] ?></td>
                    <td><?= $tableUser["description_users"] ?></td>
                    <td><?= $tableUser["avatar_users"] ?></td>
                    <td><?= $tableUser["temoignage_users"] ?></td>
                    <td><a href='?module=admin&action=editer_user&id_user=<?= $tableUser["id_users"] ?>'><img src='webroot/images/user_edit.png' alt='Bouton editer' title='' border='0' /></a></td>
                    <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>

        <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Ajouter un Utilisateur</strong><span class="bt_green_r"></span></a>
        <a href="?module=admin&action=afficher_users" class="bt_blue"><span class="bt_blue_lft"></span><strong>Afficher la table Utilisateurs</strong><span class="bt_blue_r"></span></a>

        <h3>Table Projets</h3>
        <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead>
            <tr>
                <th scope="col" class="rounded">Titre</th>
                <th scope="col" class="rounded">Nom</th>
                <th scope="col" class="rounded">Description</th>
                <th scope="col" class="rounded">Date de début</th>
                <th scope="col" class="rounded">Date de fin</th>
                <th scope="col" class="rounded">Avancement</th>
                <th scope="col" class="rounded">Auteur</th>
                <th scope="col" class="rounded">Edit</th>
                <th scope="col" class="rounded-q4">Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
                <td class="rounded-foot-right">&nbsp;</td>

            </tr>
            </tfoot>
            <tbody>
            <?php
            foreach ($tabProjets as $tabProject){ ?>
                <tr>
                    <td><?= $tabProject["titre_projets"] ?></td>
                    <td><?= $tabProject["nom_projets"] ?></td>
                    <td><?= $tabProject["description_projets"] ?></td>
                    <td><?= $tabProject["date_debut_projets"] ?></td>
                    <td><?= $tabProject["date_fin_projets"] ?></td>
                    <td><?= $tabProject["avancement_projets"] ?></td>
                    <td><?= $tabProject["login_users"] ?></td>
                    <td><a href='?module=admin&action=editer_projet&id_projet=<?= $tabProject["id_projets"] ?>'><img src='webroot/images/user_edit.png' lt='' title='' border='0' /></a></td>
                    <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>

        <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Ajouter un projet</strong><span class="bt_green_r"></span></a>
        <a href="?module=admin&action=afficher_projets" class="bt_blue"><span class="bt_blue_lft"></span><strong>Afficher la table Projets</strong><span class="bt_blue_r"></span></a>

        <h3>Table Commentaires</h3>
        <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead>
            <tr>
                <th scope="col" class="rounded">Description</th>
                <th scope="col" class="rounded">Date commentaire</th>
                <th scope="col" class="rounded">Auteur</th>
                <th scope="col" class="rounded">Associé à </th>
                <th scope="col" class="rounded">Edit</th>
                <th scope="col" class="rounded-q4">Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
                <td class="rounded-foot-right">&nbsp;</td>

            </tr>
            </tfoot>
            <tbody>
            <?php
            foreach ($tabCommentaires as $tabCommentaire){ ?>
                <tr>
                    <td><?= $tabCommentaire["content_commentaire"] ?></td>
                    <td><?= $tabCommentaire["date_commentaire"] ?></td>
                    <td><?= $tabCommentaire["login_users"] ?></td>
                    <td><?= $tabCommentaire["nom_projets"] ?></td>
                    <td><a href='?module=admin&action=editer_commentaire&id_commentaire=<?= $tabCommentaire["id_commentaire"] ?>'><img src='webroot/images/user_edit.png' lt='' title='' border='0' /></a></td>
                    <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>

        <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Ajouter un commentaire</strong><span class="bt_green_r"></span></a>
        <a href="?module=admin&action=afficher_commentaires" class="bt_blue"><span class="bt_blue_lft"></span><strong>Afficher la table Commentaires</strong><span class="bt_blue_r"></span></a>

        <h3>Table SuperUtilisateurs</h3>
        <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead>
            <tr>
                <th scope="col" class="rounded">Nom</th>
                <th scope="col" class="rounded">Prenom</th>
                <th scope="col" class="rounded">Login</th>
                <th scope="col" class="rounded">Password</th>
                <th scope="col" class="rounded">Date d'inscription</th>
                <th scope="col" class="rounded">E-mail</th>
                <th scope="col" class="rounded">Level</th>
                <th scope="col" class="rounded">Edit</th>
                <th scope="col" class="rounded-q4">Delete</th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            <?php
            foreach ($tabSuperUsers as $tabSuperUser){
                ?>
                <tr>
                    <td><?= $tabSuperUser["nom_superusers"] ?></td>
                    <td><?= $tabSuperUser["prenom_superusers"] ?></td>
                    <td><?= $tabSuperUser["login_superusers"] ?></td>
                    <td><?= $tabSuperUser["password_superusers"] ?></td>
                    <td><?= $tabSuperUser["date_inscription_superuser"] ?></td>
                    <td><?= $tabSuperUser["email_superusers"] ?></td>
                    <td><?= $tabSuperUser["level_superusers"] ?></td>
                    <td><a href='?module=admin&action=editer_superuser&id_superuser=<?= $tabSuperUser["id_superusers"] ?>'><img src='webroot/images/user_edit.png' alt='Bouton editer' title='' border='0' /></a></td>
                    <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>

        <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Ajouter un superUser</strong><span class="bt_green_r"></span></a>
        <a href="?module=admin&action=afficher_superusers" class="bt_blue"><span class="bt_blue_lft"></span><strong>Afficher la table Superusers</strong><span class="bt_blue_r"></span></a>
    </div><!-- end of right content-->

<?php include_once ("app/view/layout/footer_admin.html") ?>
