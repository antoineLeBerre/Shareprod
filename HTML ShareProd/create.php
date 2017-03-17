<?php 
	include "header.php";
?>
	<div class="content">
		<h3>Créér mon projet</h3>
		<form action="" method="" class="form-create">
			<div class="create-part1">
				<div class="titre-form-create">Résumé du projet</div>
				<input type="text" name="" placeholder="Nom du projet">
				<select name="" id="cat-create">
					<option value="1">Categorie1</option>
				</select>
				<label for="image">Choissisez une grande image pour présenter votre projet (au moins 1080 de largeur)</label>
				<input type="file" name="image"/>
				<textarea name="" id="" cols="30" rows="10" placeholder="Rapide Description (environ 50 mots)"></textarea>
				<div class="btn-suivant-create"></div>
			</div>
			<div class="create-part2">
				<div class="titre-form-create">Description du projet</div>

				<textarea name="" id="" cols="30" rows="10" placeholder="Description complète du projet"></textarea>
				<div class="btn-suivant-create"></div>
			</div>
			<div class="create-part3">
				<div class="titre-form-create">Choix des récompenses</div>
				<div class="recompense-create1">
					<input type="text" name="" placeholder="Nom récompense">
					<textarea name="" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
					<label for="valeur-recompense">Valeur de la récompense : </label>
					<input type="number" name="valeur-recompense">
				</div>
				<div class="btn-ajouter-recompense"></div>
				<input type="submit" value="Envoyer">
			</div>
		</form>
	</div>
<?php 
	include "footer.php";
?>