<?php include_once ("app/view/layout/header.php") ?>

<div class="content">
    <h3>Tous les projets</h3>
    <div class="cat">
        FILTRER PAR :
        <?php foreach ($tabCategories as $tabCategory) { ?>
        <a href="?module=projets&action=projets&cat=<?= $tabCategory["id_cat"] ?>"><div class="cat1">
                <img src="img/icons/financement-goal.svg" alt=""/>
                <?= $tabCategory["nom_cat"]; ?>
            </div></a>
        <?php } ?>
    </div>
    <div class="bandebleu"></div>
    <div class="liste-projets">
        <div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet">Nom du projet</div>
                <p>See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    100000€ / 120000€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    30 jours restants
                </div>
            </div>
        </div>
        <div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet">Nom du projet</div>
                <p>See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    100000€ / 120000€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    30 jours restants
                </div>
            </div>
        </div>
        <div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet">Nom du projet</div>
                <p>See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    100000€ / 120000€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    30 jours restants
                </div>
            </div>
        </div>
    </div>
    <div class="bandebleu"></div>
    <div class="liste-projets">
        <div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet">Nom du projet</div>
                <p>See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    100000€ / 120000€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    30 jours restants
                </div>
            </div>
        </div>
        <div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet">Nom du projet</div>
                <p>See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    100000€ / 120000€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    30 jours restants
                </div>
            </div>
        </div>
        <div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet">Nom du projet</div>
                <p>See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    100000€ / 120000€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    30 jours restants
                </div>
            </div>
        </div>
    </div>
    <a href=""><div class="btn-plusprojet btn">Voir plus de projets</div></a>
</div>

<?php include_once ("app/view/layout/footer.php") ?>
