
<div id="Panel_liste">
	<h2><p align='center'>LISTE DES GROUPES</h2>
	<?php
		if ($result->rowCount() == 0) {
			die("La table est vide");
		}
	?>
	<br>
	<div class='col-lg-10 col-lg-offset-1'>
		<table class='table table-bordered table-striped'>
			<tr class="tableau2">
				<td>Nom du groupe</td>
				<td>Nationalité du groupe</td>
				<td>Date de création</td>
			</tr>
	
			<?php while ($lien = $result->fetch(PDO::FETCH_OBJ)): ?>

				<tr class="tableau">
				<td width='auto'><?php echo $lien->gro_nom ?></td>
				<td width='40%'><?php echo $lien->gro_nationalite ?></td>
				<td> <?php echo $lien->gro_date_creation ?></td>
				</tr>

			<?php endwhile; ?>

		</table>
	</div>
</div>