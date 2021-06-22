<div class="modal fade" id="Modal_Details_Mus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Details de : <?php echo $lien->mus_titre ?> </h4>
      </div>
      <div class="modal-body">

		<div>		
			<table class="table table-bordered table-striped">
			<tr>
				<th>Titre</th>
				<td><?php echo $lien->mus_titre ?></td>
			</tr>
			<tr>
				<th>Durée de la musique</th>
				<td><?php echo $lien->mus_duree ?></td>
			</tr>
			<tr>			
				<th>Date d'apparition</th>
				<td><?php echo $lien->mus_date_apparition ?></td>
			</tr>
			<tr>
				<th>Nom de l'auteur</th>
				<td ><?php echo $lien->mus_auteur_nom ?></td>
			</tr>
			<tr>
				<th>Prenom de l'auteur</th>
				<td><?php echo $lien->mus_auteur_prenom ?></td>
			</tr>
			<tr>
				<th>Pays</th>
				<td><?php echo $lien->mus_pays ?></td>
			</tr>
			<tr>
				<th>Région</th>
				<td><?php echo $lien->mus_region ?></td>
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
 	$("#Modal_Details_Mus").modal('show');
});

</script>