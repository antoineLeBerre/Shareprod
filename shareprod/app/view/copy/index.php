<?php include_once ("app/view/layout/header.php") ?>

    <div id="container1">
 	<div class="lancerprojet">
 		<div class="img-lancerprojet"></div>
 		Je veux créer ma série
 		<p></p>
 		<a href="?module=projets&action=create"><div class="btn-lancerprojet">Se lancer</div></a>
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
 		Filtrer par :
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
			<img src="webroot/image_miniature/<?= $tabProjet{"image_miniature"} ?>.bmp" alt="">
			<div class="txt-projet">
				<h3><?= $tabProjet{"titre_projets"} ?></h3>
				<p><?= $tabProjet{"texte_miniature"} ?></p>
				<div class="barre-chargement"></div>
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
        <?php foreach ($tabUsers as $tabUser) { ?>
        <div class="temoignage-content">
            <div class="temoignage-info">
                <img src="webroot/img/bg/success3.png" alt="">
                <div class="temoignage-identite">
                    <div class="nom-temoignage"><?= $tabUser["prenom_users"]." ".$tabUser["nom_users"] ?></div>
                    <div class="nom-projet-temoignage">L'Antenne</div>
                </div>
            </div>
            <div class="desc-temoignage"></div>
        </div>
        <?php } ?>
 	</div>
 	<a href=""><div class="btn-temoignages btn">+ de témoignages</div></a>
 </div>

<?php include_once ("app/view/layout/footer.php") ?>