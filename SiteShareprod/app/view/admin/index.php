<?php include_once ("app/view/layout/header.html") ?>

    <div class="right_content">

        <h2>Products Categories Settings</h2>


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
            <tr>
                <td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
                <td class="rounded-foot-right">&nbsp;</td>

            </tr>
            </tfoot>
            <tbody>
            <?php
            foreach ($tableUsers as $tableUser){
                echo "<tr>";
                echo "<td>".$tableUser[1]."</td>";
                echo "<td>".$tableUser[2]."</td>";
                echo "<td>".$tableUser[3]."</td>";
                echo "<td>".$tableUser[4]."</td>";
                echo "<td>".$tableUser[5]."</td>";
                echo "<td>".$tableUser[6]."</td>";
                echo "<td>".$tableUser[7]."</td>";
                echo "<td>".$tableUser[8]."</td>";
                echo "<td><a href=''#'><img src='webroot/images/user_edit.png' lt='' title='' border='0' /></a></td>";
                echo '<td><a href="#" class="ask"><img src="webroot/images/trash.png" alt="" title="" border="0" /></a></td>';
                echo "</tr>";
            }
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