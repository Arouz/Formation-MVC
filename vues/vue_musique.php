<div>
	<div id="Serror" class="alert alert-danger centertext cache container" role="alert">Des groupes jouent ce titre.. Suppression Impossible</div>
	</div>
	<h2><p align='center'>LISTE DES OEUVRES</h2>
	<?php
		if ($result->rowCount() == 0) {
			die("La table est vide");
		}
	?>
	<br>
	<div class='col-lg-10 col-lg-offset-1'>
		<table class='table table-bordered table-striped'>
			<a class='btn btn-default addj glyphicon glyphicon-plus hidden-sm hidden-xs btn-lower mus-add'></a>
			<tr class="tableau2">
				<td>Titre</td>
				<td>Durée</td>
				<td>Nom de l'auteur</td>
				<td>Prenom de l'auteur</td>
				<td class='hidden-sm hidden-xs'>Gestion</td>
			</tr>

			<?php while ($lien = $result->fetch(PDO::FETCH_OBJ)): ?>

			<tr class="tableau">
				<td><?php echo $lien->mus_titre ?></td>
				<td><?php echo $lien->mus_duree ?></td>
				<td><?php echo $lien->mus_auteur_nom ?></td>
				<td><?php echo $lien->mus_auteur_prenom ?></td>
				<td class='hidden-sm hidden-xs' width='auto'>
					<a data-num="<?php echo $lien->mus_id ?>" class='btn btn-default glyphicon glyphicon-eye-open btn-lower mus-details'></a>
					&nbsp;
					<a data-num="<?php echo $lien->mus_id ?>" class='btn btn-default glyphicon glyphicon glyphicon-pencil btn-lower mus-modif'></a>
					&nbsp;
					<a data-num="<?php echo $lien->mus_id ?>" class='btn btn-default glyphicon glyphicon-remove btn-lower mus-supprime'></a>
				</td>
				</tr>
				
			<?php endwhile; ?>

		</table>
	</div>
</div>

<script>
	
$(".mus-details").click(function() {
	var num = $(this).data("num");
	$.post("controller.php", "action=mus_details&id="+num, function( data ) {
		$("#panel_c").html(data);
	});
});

$(".mus-modif").click(function() {
	var num = $(this).data("num");
	$.post("controller.php", "action=mus_modif&id="+num, function( data ) {
		$("#panel_c").html(data);
	});
});

$(".mus-supprime").click(function() {
	var num = $(this).data("num");
	$.post("controller.php", "action=mus_supprime&id="+num, function( data ) {
		if (data == "")
			$("#Serror").slideDown(500).delay(2500).slideUp(900);
		else 
			$("#panel_c").html(data);
	});
});

$(".mus-add").click(function() {
	$("#panel_c").load("controller.php?action=mus_ajout");
});

</script>