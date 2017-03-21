<?php include_once ("app/view/layout/header_admin.php") ?>



    <h3>Table Utilisateurs</h3>
    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
        <thead>
        <tr>
            <th scope="col" class="rounded">Nom</th>
            <th scope="col" class="rounded">Prenom</th>
            <th scope="col" class="rounded">Login</th>
            <th scope="col" class="rounded">Mot de passe</th>
            <th scope="col" class="rounded">Date de debut</th>
            <th scope="col" class="rounded">Email</th>
            <th scope="col" class="rounded">Description</th>
            <th scope="col" class="rounded">Avatar</th>
            <th scope="col" class="rounded">Temoignage</th>
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
                <td><a href='#'><img src='webroot/images/user_edit.png' alt='Bouton editer' title='' border='0' /></a></td>
                <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>

    <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>


    <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
    </div>

<?php include_once ("app/view/layout/footer_admin.html") ?>
