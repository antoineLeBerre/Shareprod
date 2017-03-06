<?php 
	include "header.php";
?>
	<h3>Créér mon projet</h3>
	<form action="" method="" class="form-create">
		<div class="create-part1">
			Résumé du projet
			<input type="text" name="" placeholder="Nom du projet">
			<select name="" id="cat-create">
				<option value="1">Categorie1</option>
			</select>
			<input type="file" name="" placeholder="Choisir une image">
			<textarea name="" id="" cols="30" rows="10" placeholder="Rapide Description"></textarea>
		</div>
		<div class="btn-suivant-create"></div>
		<div class="create-part2">
			Description du projet
			<textarea name="" id="" cols="30" rows="10" placeholder="Description complète du projet"></textarea>
		</div>
		<div class="create-part3">
			Choix des récompenses
			<div class="recompense-create1">
				<input type="text" name="" placeholder="Nom récompense">
				<textarea name="" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
				Valeur de la récompense : <input type="number" name="">
			</div>
			<div class="recompense-create2">
				<input type="text" name="" placeholder="Nom récompense">
				<textarea name="" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
				Valeur de la récompense : <input type="number" name="">
			</div>
			<div class="recompense-create3">
				<input type="text" name="" placeholder="Nom récompense">
				<textarea name="" id="" cols="30" rows="10" placeholder="Description récompense"></textarea>
				Valeur de la récompense : <input type="number" name="">
			</div>
		</div>
		<input type="submit" value="Envoyer">
	</form>
<?php 
	include "footer.php";
?>