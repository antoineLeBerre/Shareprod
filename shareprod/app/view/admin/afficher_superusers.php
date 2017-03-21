<?php include_once ("app/view/layout/header_admin.php") ?>

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
            <td><a href='#'><img src='webroot/images/user_edit.png' alt='Bouton editer' title='' border='0' /></a></td>
            <td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
    <?php }
    ?>
    </tbody>
</table>

<a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Ajouter un superUser</strong><span class="bt_green_r"></span></a>

<?php include_once ("app/view/layout/footer_admin.html") ?>
