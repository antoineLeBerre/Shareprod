<?php include_once ("app/view/layout/header.html") ?>

    <div class="right_content">

        <h2>Affichage des tables de la BDD</h2>


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
                <th scope="col" class="rounded">Edit</th>
                <th scope="col" class="rounded-q4">Delete</th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            <?php
            for ($i = 0, $i <= $nbAffiche, $i++){
                ?>
                <tr>
                    <td><?= $tableUsers[$i]["nom_users"] ?></td>
                    <td><?= $tableUsers[$i]["prenom_users"] ?></td>
                    <td><?= $tableUsers[$i]["login_users"] ?></td>
                    <td><?= $tableUsers[$i][4] ?></td>
                    <td><?= $tableUsers[$i][5] ?></td>
                    <td><?= $tableUsers[$i][6] ?></td>
                    <td><?= $tableUsers[$i][7] ?></td>
                    <td><?= $tableUsers[$i][8] ?></td>
                    <td><a href='#'><img src='webroot/images/user_edit.png' alt='Bouton editer' title='' border='0' /></a></td>
                    <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>

        <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
        <a href="?module=admin&action=afficher_user" class="bt_blue"><span class="bt_blue_lft"></span><strong>Afficher la table Utilisateurs</strong><span class="bt_blue_r"></span></a>

        <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead>
            <tr>
                <th scope="col" class="rounded">Titre</th>
                <th scope="col" class="rounded">Nom</th>
                <th scope="col" class="rounded">Description</th>
                <th scope="col" class="rounded">Date de début</th>
                <th scope="col" class="rounded">Date de fin</th>
                <th scope="col" class="rounded">Avancement</th>
                <th scope="col" class="rounded">Appartient à</th>
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
                    <td><a href='#'><img src='webroot/images/user_edit.png' lt='' title='' border='0' /></a></td>
                    <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>

        <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
        <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
        <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
        <div class="pagination">
            <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div>

    </div><!-- end of right content-->

<?php include_once ("app/view/layout/footer.html") ?>
