<?php include_once ("app/view/layout/header.php") ?>

<div id="container1">
    <div class="lancerprojet">
        <div class="img-lancerprojet"></div>
        <div class="baseline">Je veux créer ma série</div>
        <p>Découvrez comment ShareProd vous accompagne pour réussir votre phase de financement</p>
        <a href="?module=projets&action=create"><div class="btn-lancerprojet btn">Se lancer</div></a>
    </div>
    <div class="voirprojet">
        <div class="img-voirprojet"></div>
        <div class="baseline">Je veux financer un projet</div>
        <p>Faites vivre les nombreux projets qui voient le jour grâce à notre système de crowdfunding</p>
        <a href="?module=projets&action=projets"><div class="btn-voirprojet btn">Explorer</div></a>
    </div>
    <div class="scroll"></div>
</div>
<div id="container2">
    <div class="content-h2"><div class="h2-bordure"></div><h3>Projets du jour</h3><div class="h2-bordure"></div></div>
    <div class="cat">
        FILTRER PAR :
        <?php foreach ($tabCategories as $tabCategory) { ?>
            <a href="?module=projets&action=projets&cat=<?= $tabCategory["id_cat"] ?>"><div class="cat1">
                    <img src="webroot/img/icons/financement-goal.svg" alt="">
                    <?= $tabCategory["nom_cat"]; ?>
                </div></a>
        <?php } ?>
    </div>
    <div class="bandebleu"></div>
    <div class="projetsdujour">
        <?php foreach ($tabProjets as $tabProjet){
        ?>
        <a href="?module=projets&action=detail&id=<?= $tabProjet["id_projets"] ?>"><div class="projet1">
            <img src="webroot/image_miniature/image1.bmp" alt="">
            <div class="txt-projet">
                <div class="nom-projet"><?= $tabProjet{"titre_projets"} ?></div>
                <p><?= $tabProjet{"texte_miniature"} ?></p>
                <div class="barre-chargement">
                    <?php $avancementProjet = ($tabProjet{"avancement_projets"} - $tabProjet{"financement_max_projets"})*250 ?>
                    <div class="barre-chargement-avancement" width="<?= $avancementProjet?>"></div>
                </div>
                <div class="argent-restant">
                    <div class="img-argent-restant"></div>
                    <?= $tabProjet{"avancement_projets"} ?>€ / <?= $tabProjet{"financement_max_projets"} ?>€ restants
                </div>
                <div class="temps-restant">
                    <div class="img-temps-restant"></div>
                    <?= $tabProjet[5] ?> jours restants
                </div>
            </div>
            </div></a>
        <?php } ?>
    </div>
</div>
<div id="container3">
    <div class="content-h2"><div class="h2-bordure-blanc"></div><h3 class="white">Success-story</h3><div class="h2-bordure-blanc"></div></div>
    <div class="content-success">
        <div class="success1"></div>
        <div class="success2"></div>
        <div class="success3"></div>
        <div class="success4"></div>
    </div>
    <a href=""><div class="btn-successstory btn">+ de success-story</div></a>
</div>
<div id="container4">
    <div class="content-h2"><div class="h2-bordure-blanc"></div><h3 class="white">Témoignages</h3><div class="h2-bordure-blanc"></div></div>
    <div class="desc-temoignages">Retrouvez les témoignages de ceux qui ont financé leur projet grâce à ShareProd.</div>
    <div class="temoignage1">
        <div class="temoignage-content">
            <div class="temoignage-info">
                <img src="img/bg/success3.png" alt="">
                <div class="temoignage-identite">
                    <div class="nom-temoignage">Lucas Duhamel</div>
                    <div class="nom-projet-temoignage">L'Antenne</div>
                </div>
            </div>
            <div class="desc-temoignage">See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</div>
        </div>
    </div>
    <div class="temoignage2">
        <div class="temoignage-content">
            <div class="temoignage-info">
                <img src="webroot/img/bg/success3.png" alt="">
                <div class="temoignage-identite">
                    <div class="nom-temoignage">Lucas Duhamel</div>
                    <div class="nom-projet-temoignage">L'Antenne</div>
                </div>
            </div>
            <div class="desc-temoignage">See owner, run in terror mrow, unwrap toilet paper, yet missing until dinner time. If it fits, i sits chase the pig around the house.</div>
        </div>
    </div>
    <a href=""><div class="btn-temoignages btn">+ de témoignages</div></a>
</div>

<?php include_once ("app/view/layout/footer.php") ?>
