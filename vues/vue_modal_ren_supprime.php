<div class="modal fade" id="Modal_Ren_Suppr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulaire de suppression</h4>
      </div>
      <div class="modal-body">

		<form id="form_5">
		  <h1>Suppression de : <?php echo $lien->ren_nom ?></h1>
		  <div class="form-group">
		    <input name="id" type="text" class="form-control hidden" id="id" value="<?php echo $lien->ren_id ?>">
		  </div>
		  <div class="form-group">
		    <label for="nom">Nom</label>
		    <input type="text" class="form-control" id="nom" value="<?php echo $lien->ren_nom ?>" readonly>
		  </div>
		  <div class="form-group">
		    <label for="nom">Lieu</label>
		    <input type="text" class="form-control" id="lieu" value="<?php echo $lien->ren_lieu ?>" readonly>
		  </div>
		  <div class="form-group">
		    <label for="debut">Date de début</label>
		    <input type="date" class="form-control" id="debut" value="<?php echo $lien->ren_date_debut ?>" disabled>
		  </div>
		  <div class="form-group">
		    <label for="fin">Date de fin</label>
		    <input type="date" class="form-control" id="fin" value="<?php echo $lien->ren_date_fin ?>" disabled>
		  </div>
		  <div class="form-group">
		    <label for="period">Lieu</label>
		    <input type="text" class="form-control" id="period" value="<?php echo $lien->ren_periodicite ?>" readonly>
		  </div>
		  <div class="form-group">
		    <label for="nombre">Nombre de personne</label>
		    <input type="text" class="form-control" id="nombre" value="<?php echo $lien->ren_nombre_personne ?>" readonly>
		  </div>
		  <input type="hidden" name="action" value="ren_valider_supprime" />
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à la liste</button>
        <button id="sub4" type="button" class="btn btn-danger">Supprimer</button>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
 	$("#Modal_Ren_Suppr").modal('show');
});

$("#sub4").click(function() {
	$.post("controller.php", $("#form_5").serialize(), function(data){
		$("#panel_a").load("controller.php?action=rencontre");
		$("#Modal_Ren_Suppr").modal("hide");
    });
});

</script>