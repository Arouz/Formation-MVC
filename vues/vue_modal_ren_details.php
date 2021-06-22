<div class="modal fade" id="Modal_Ren_Details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Details de : <?php echo $lien->ren_nom ?> </h4>
      </div>
      <div class="modal-body">

		<div>		
			<table class="table table-bordered table-striped">
			<tr>
				<th>Nom de la rencontre</th>
				<td><?php echo $lien->ren_nom ?></td>
			</tr>
			<tr>			
				<th>Lieu</th>
				<td><?php echo $lien->ren_lieu ?></td>
			</tr>
			<tr>
				<th>Date de debut</th>
				<td ><?php echo $lien->ren_date_debut ?></td>
			</tr>
			<tr>
				<th>Date de fin</th>
				<td><?php echo $lien->ren_date_fin ?></td>
			</tr>
			<tr>
				<th>Periodicité</th>
				<td><?php echo $lien->ren_periodicite ?></td>
			</tr>
			<tr>
				<th>Nombre de personne</th>
				<td><?php echo $lien->ren_nombre_personne ?></td>
			</tr>
			</table>
		</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à la liste</button>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
 	$("#Modal_Ren_Details").modal('show');
});

</script>