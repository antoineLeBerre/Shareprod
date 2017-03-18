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
        <?php while ($i < $affichage) { ?>
        <a href="?module=projets&action=detail&id=<?= $tabProjets[$i]["id_projets"] ?>"><div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet"><?= $tabProjets[$i]["titre_projets"] ?></div>
                <p><?= $tabProjets[$i]["texte_miniature"] ?></p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    <?= $tabProjets[$i]["avancement_projets"] ?>€ / <?= $tabProjets[$i]["financement_max_projets"] ?>0€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    <?= $tabProjets[$i][5] ?> jours restants
                </div>
            </div>
            </div></a>
            <?php  $i++;  } ?>
    </div>
    <div class="bandebleu"></div>
    <div class="liste-projets">
        <?php while ($i < sizeof($tabProjets)) { ?>
        <a href="?module=projets&action=detail&id=<?= $tabProjets[$i]["id_projets"] ?>"><div class="projet1">
            <img src="img/bg/success1.png" alt="">
            <div class="txt-projet">
                <div class="nom-projet"><?= $tabProjets[$i]["titre_projets"] ?></div>
                <p><?= $tabProjets[$i]["texte_miniature"] ?></p>
                <div class="barre-chargement">
                    <div class="barre-chargement-avancement"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    <?= $tabProjets[$i]["avancement_projets"] ?>€ / <?= $tabProjets[$i]["financement_max_projets"] ?>€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    <?= $tabProjets[$i][5] ?> jours restants
                </div>
            </div>
            </div></a>
            <?php  $i++;  } ?>
    </div>
    <a href=""><div class="btn-plusprojet btn">Voir plus de projets</div></a>
</div>

<?php include_once ("app/view/layout/footer.php") ?>
