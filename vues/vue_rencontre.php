<div>
	<div id="Merror" class="alert alert-danger centertext cache container" role="alert">Il y a des groupes inscrit à cette rencontre.. Suppression Impossible</div>
</div>
	<h2><p align='center'>LISTE DES RENCONTRES</h2>
	<?php
		if ($result->rowCount() == 0) {
			die("La table est vide");
		}
	?>
	<br>
	<div class='col-lg-10 col-lg-offset-1'>
		<table class='table table-bordered table-striped'>
			<a class='btn btn-default addj glyphicon glyphicon-plus hidden-sm hidden-xs btn-lower ren-add'></a>
			<tr class="tableau2">
				<td>Nom</td>
				<td>Lieu</td>
				<td>Nombre de personnes</td>
				<td class='hidden-sm hidden-xs'>Gestion</td>
			</tr>
	
			<?php while ($lien = $result->fetch(PDO::FETCH_OBJ)): ?>
				<tr class="tableau">
				<td><?php echo $lien->ren_nom ?></td>
				<td><?php echo $lien->ren_lieu ?></td>
				<td><?php echo $lien->ren_nombre_personne ?></td>
				<td class='hidden-sm hidden-xs' width='auto'>
					<a data-num="<?php echo $lien->ren_id ?>" class='btn btn-default glyphicon glyphicon-eye-open btn-lower ren-details'></a>
					&nbsp;
					<a data-num="<?php echo $lien->ren_id ?>" class='btn btn-default glyphicon glyphicon glyphicon-pencil btn-lower ren-modif'></a>
					&nbsp;
					<a data-num="<?php echo $lien->ren_id ?>" class='btn btn-default glyphicon glyphicon-remove btn-lower ren-supprime'></a>
				</td>
				</tr>
			<?php endwhile; ?>

		</table>
	</div>
<script>

$(".ren-details").click(function() {
	var num = $(this).data("num");
	$.post("controller.php", "action=ren_details&id="+num, function( data ) {
		$("#panel_c").html(data);
	});
});

$(".ren-modif").click(function() {
	var num = $(this).data("num");
	$.post("controller.php", "action=ren_modif&id="+num, function( data ) {
		$("#panel_c").html(data);
	});
});

$(".ren-supprime").click(function() {
	var num = $(this).data("num");
	$.post("controller.php", "action=ren_supprime&id="+num, function( data ) {
		if (data == "")
			$("#Merror").slideDown(500).delay(2500).slideUp(900);
		else 
			$("#panel_c").html(data);
	});
});

$(".ren-add").click(function() {
	$("#panel_c").load("controller.php?action=ren_ajout");
});

</script>

