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
 		Je veux financer un projet
 		<p></p>
 		<a href="?module=projets&action=projets"><div class="btn-voirprojet">Explorer</div></a>
 	</div>
 	<div class="scroll"></div>
 </div>
 <div id="container2">
 	<h2>Projet du jour</h2>
 	<div class="cat">
 		Filtrer par :
        <?php foreach ($tabCategories as $tabCategory) { ?>
 		<a href="?module=projets&action=projets&cat=<?= $tabCategory["id_cat"] ?>"><div class="cat1">
            <img src="webroot/icone_cat/<?= $tabCategory["icone_cat"]?>.bmp" alt="">
 			<?= $tabCategory["nom_cat"]; ?>
 		</div></a>
        <?php } ?>
 	</div>
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
 	<h2>Success-story</h2>
 	<img src="" alt="">
 	<img src="" alt="">
 	<img src="" alt="">
 	<img src="" alt="">
 	<a href=""><div class="btn-successstory">Toutes les success-story</div></a>
 </div>
 <div id="container4">
 	<h2>Témoignages</h2>

 	<div class="desc-temoignages"></div>
 	<div class="temoignage1">
        <?php foreach ($tabUsers as $tabUser) { ?>
 		<div class="img-temoignage"></div>
 		<div class="nom-temoignage"><?= $tabUser["prenom_users"]." ".$tabUser["nom_users"] ?></div>
 		<div class="desc-temoignage"></div>
        <?php } ?>
 	</div>
 	<a href=""><div class="btn-temoignages">Tous les témoignages</div></a>
 </div>

<?php include_once ("app/view/layout/footer.php") ?>
