<div class="container col-md-8 col-md-offset-2">
	<h4>Groupes jouant un titre donné :</h4>
	<select id="titre" name="id" class="form-control">
		<?php while ($lien = $result->fetch(PDO::FETCH_OBJ)): ?>
			<option value="<?php echo $lien->mus_id ?>"><?php echo $lien->mus_titre ?></option>
		<?php endwhile; ?>
	</select>
	<br>
	<button id="inter" type="button" class="btn btn-default">Rechercher</button>
	<button id="reset" type="button" class="btn btn-default">Reset</button>
</div>

<script>
$("#inter").click(function() {
	var M_id = $("#titre").val();
	$("#panel_f").load("controller.php?action=gro_interrogation&id="+M_id);
});

$("#reset").click(function() {
	$("#panel_f").empty();
});
</script>