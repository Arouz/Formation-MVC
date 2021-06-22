<div class="container col-md-8 col-md-offset-2">
	<?php if ($result->rowCount() == 0) {	?>
		<br>
		<div>
			<table class='table table-bordered table-striped'>
				<tr class="tableau2">
					<td>Aucun groupe ne joue ce titre !</td>
				</tr>
			</table>
		</div>
	<?php die(); } ?>
			

	<br>
	<div>

		<table class='table table-bordered table-striped'>

			<tr class="tableau2">
				<td>Groupe(s) jouant ce titre :</td>
			</tr>

			<?php foreach ($result as $test): ?>
				<tr class="tableau">
				<td width='auto'><?php echo $test["gro_nom"] ?></td>
				</tr>
			<?php endforeach ?>

		</table>

	</div>
</div>