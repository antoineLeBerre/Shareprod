<?php include_once ("app/view/layout/header_admin.php");
if (!defined("BASE_URL")) die("ressource interdite"); ?>

<div class="right_content">

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

    <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
    <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
    </div>

</div><!-- end of right content-->

<?php include_once ("app/view/layout/footer_admin.html") ?>
