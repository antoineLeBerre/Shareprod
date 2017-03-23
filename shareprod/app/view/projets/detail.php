<?php include_once ("app/view/layout/header.php");
if (!defined("BASE_URL")) die("ressource interdite");
?>
	<div class="resume-detail" style="background-image:url('img/bg/test.jpeg')">
		<div class="infos-projet-detail">
				<h1><?= $tabProjets[0]["titre_projets"] ?></h1>
				<div class="projet-detail-identite">
				<img src="webroot/img/bg/success3.png" alt="">
				<div class="nom-projet-detail"><?= $tabProjets[0]["titre_projets"] ?></div>
			</div>
            <?php foreach ($tabProjetsCat as $tabProjetCat){ ?>
                <div class="cat-detail">
                    <img src="webroot/img/icons/voir.svg" alt=""/>
                    <div class="cat-detail-name"><?= $tabProjetCat["nom_cat"] ?></div>
                </div>
            <?php } ?>
		</div>
		<div class="btn-soutenir-detail">
			<div class="img-btn-soutenir-detail"></div>
			Soutenir
		</div>
		<div class="content-chiffres-detail">
			<div class="chiffres-projet-detail">
				<div class="montant-detail">
					<span><?= $tabProjets[0]["avancement_projets"] ?>€</span> / <?= $tabProjets[0]["financement_max_projets"] ?>€
				</div>
				<div class="container-projet-detail">
					<div class="pourcentage-detail">
						<div class="img-pourcentage-detail"></div>
						<?= $pourcent ?>% terminés
					</div>
					<div class="contributeurs-detail">
						<div class="img-contributeur-detail"></div>
						48 contributeurs
					</div>
					<div class="joursrestant-detail">
						<div class="img-joursrestant-detail"></div>
                        <?= $restant ?> jours restant
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="content">
	<div class="projet-detail-detg">
		<div class="projet-gauche">
		<div class="contenu-projet">
			<h2>A propos</h2>
			<div class="contenu-projet-txt"><?= $tabProjets[0]["description_projets"] ?>
			</div>
		</div>
		<div class="commentaires-detail">
			<h2>Commentaires</h2>
            <?php foreach ($tabProjetsCommentaire as $tabProjetCommentaire){ ?>
			<div class="commentaire">
				<img src="webroot/img/bg/success3.png" alt="">
				<div class="commentaire-content">
					<div class="nom-commentaire"><?= $tabProjetCommentaire["prenom_users"]." ".$tabProjetCommentaire["nom_users"] ?></div>
					<p><?= $tabProjetCommentaire["content_commentaire"] ?></p>
				</div>
			</div>
            <?php } ?>
			<div class="btn-commentaires-detail btn">+ de commentaires</div>
		</div>

	</div>
		<div class="projet-droite">
		<div class="contribution-detail">
			<h4>Contribution</h4>
            <?php if (!isset($_GET["somme"])){ ?>
                <div class="recompense-content">
                    <div class="titre-recompense"><?= $tabProjetsContrib[0]["contrib_titre"] ?></div>
                    <p><?= $tabProjetsContrib[0]["contrib_descr"] ?></p>
                </div>
            <?php }
            else{
                foreach ($tabProjetsContrib as $tabProjetContrib){
                    if ($_GET["somme"] == $tabProjetContrib["contrib_somme"]){?>
                        <div class="recompense-content">
                            <div class="titre-recompense"><?= $tabProjetContrib["contrib_titre"] ?></div>
                            <p><?= $tabProjetContrib["contrib_descr"] ?></p>
                        </div>
                    <?php }
                }
            } ?>
			<div class="montants-contribution">
            <?php foreach ($tabProjetsContrib as $tabProjetContrib){ ?>
				<a href="?module=projets&action=detail&id=<?= $_GET["id"] ?>&somme=<?= $tabProjetContrib["contrib_somme"] ?>"><div class="montant-contribution selected">
                    <?= $tabProjetContrib["contrib_somme"] ?>
				</div></a>
            <?php } ?>
			</div>
		</div>
	</div>
	</div>
	</div>
	<div class="faq-detail">
		<div class="scroll-top"></div>
		<h4 class="white">FAQ</h4>
		Vous avez des questions ?
		<a href=""><div class="btn-faq-detail btn">Voir</div></a>
		<div class="scroll-top"></div>
	</div>

<?php include_once ("app/view/layout/footer.php") ?>