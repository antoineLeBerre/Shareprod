<?php
include_once ("app/view/layout/header.php");
?>
	<div class="content">
		<h3>Créér mon projet</h3>
		<form action="?module=projets&action=create" method="post" class="form-create">
			<div class="create-part1">
				<div class="titre-form-create">Résumé du projet</div>
				<input type="text" name="nom_create" placeholder="Nom du projet">
                <input type="text" name="titre_create" placeholder="Titre du projet">
				<select name="cat_create" id="cat-create">
                    <?php foreach ($tabCats as $tabCat) { ?>
                        <option value="<?= $tabCat["id_cat"] ?>"><?= $tabCat["nom_cat"] ?></option>
                    <?php } ?>
				</select>
				<label for="image">Choissisez un logo pour présenter votre projet (au max 180 de largeur)</label>
				<input type="file" name="logo_create"/>
				<textarea name="desxr_miniature_create" id="" cols="30" rows="10" placeholder="Rapide Description (environ 50 mots)"></textarea>
				<div class="btn-suivant-create"></div>
			</div>
			<div class="create-part2">
				<div class="titre-form-create">Description du projet</div>

				<textarea name="descr_create" id="" cols="30" rows="10" placeholder="Description complète du projet"></textarea>
                <label for="image">Choissisez une grande image pour présenter votre projet (au moins 1080 de largeur)</label>
                <input type="file" name="image_create"/>
				<label for="financement-espere">Valeur du financement espéré : </label>
				<input type="text" name="financement_create" placeholder="Valeur en €">
				<div class="btn-suivant-create2"></div>
			</div>
			<div class="create-part3">
				<div class="titre-form-create">Choix des récompenses</div>
				<div class="recompense-create1">
					<input type="text" name="nom_valeur_create1" placeholder="Nom récompense">
					<textarea name="descr_valeur_create1" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
					<label for="valeur_create1">Valeur de la récompense : </label>
					<input type="text" name="valeur_create1" placeholder="Valeur en €">
				</div>
                <div class="recompense-create1">
                    <input type="text" name="nom_valeur_create2" placeholder="Nom récompense">
                    <textarea name="descr_valeur_create2" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
                    <label for="valeur_create2">Valeur de la récompense : </label>
                    <input type="text" name="valeur_create2" placeholder="Valeur en €">
                </div>
                <div class="recompense-create1">
                    <input type="text" name="nom_valeur_create3" placeholder="Nom récompense">
                    <textarea name="descr_valeur_create3" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
                    <label for="valeur_create3">Valeur de la récompense : </label>
                    <input type="text" name="valeur_create3" placeholder="Valeur en €">
                </div>
				<input type="submit" value="Envoyer">
			</div>
		</form>
	</div>
<?php
include_once ("app/view/layout/footer.php");
?>
