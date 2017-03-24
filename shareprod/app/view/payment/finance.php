<?php include_once ("app/view/layout/header.php") ?>
	<div class="content">
		<h3>Financer un projet</h3>
		<form action="" method="" class="form-financer">
			<div class="content-form-financer">
				<div class="titre-form-financer">Soutenir ce projet</div>
				<div class="recompense-financer">
					<input type="radio" name="recompense" value="">
					Soutenir sans récompense
				</div>
                <?php foreach ($tabProjetsContrib as $tabContribution) { ?>
                    <div class="recompense-financer">
                        <div class="descr-recompense">
                            <input type="radio" name="recompense" value="">
                            <?= $tabContribution["contrib_titre"] ?>
						<p><?= $tabContribution["contrib_descr"] ?></p>
					</div>
					<div class="montant-recompense-financer"><?= $tabContribution["contrib_somme"] ?>€</div>
                <?php } ?>
                <input type="submit" value="Valider">
            </div>
		</form>
	</div>
<?php include_once ("app/view/layout/footer.php") ?>