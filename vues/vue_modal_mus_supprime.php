<div class="modal fade" id="Modal_Suppr_Mus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulaire de suppression</h4>
      </div>
      <div class="modal-body">

        <form id="form_x">
		  <h1>Suppression de : <?php echo $lien->mus_titre ?></h1>
		  <div class="form-group">
		    <input name="id" type="text" class="form-control hidden" id="id" value="<?php echo $lien->mus_id ?>">
		  </div>

		  <div class="form-group">
		    <label for="titre">Titre</label>
		    <input name="titre" type="text" class="form-control" id="titre" value="<?php echo $lien->mus_titre ?>" readonly>
		  </div>

		  <div class="form-group">
		    <label for="date">Date d'apparition</label>
		    <input name="date" type="date" class="form-control" id="date" value="<?php echo $lien->mus_date_apparition ?>" disabled>
		  </div>

		  <div class="form-group">
		    <label for="anom">Nom de l'auteur</label>
		    <input name="anom" type="text" class="form-control" id="anom" value="<?php echo $lien->mus_auteur_nom ?>" readonly>
		  </div>

		  <div class="form-group">
		    <label for="aprenom">Prenom de l'auteur</label>
		    <input name="aprenom" type="text" class="form-control" id="aprenom" value="<?php echo $lien->mus_auteur_prenom ?>" readonly>
		  </div>

		  <div class="form-group">
		    <label for="duree">Durée de la musique</label>
		    <input name="duree" type="time" class="form-control" id="duree" value="<?php echo $lien->mus_duree ?>" disabled>
		  </div>

  		  <div class="form-group">
		    <label for="pays">Pays</label>
		    <input name="pays" type="text" class="form-control" id="pays" value="<?php echo $lien->mus_pays ?>" readonly>
		  </div>

		  <div class="form-group">
		    <label for="region">Region</label>
		    <input name="region" type="text" class="form-control" id="region" value="<?php echo $lien->mus_region ?>" readonly>
		  </div>


		  <input type="hidden" name="action" value="mus_valider_supprime" />
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à la liste</button>
        <button id="subM" type="button" class="btn btn-danger">Supprimer</button>
      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
 	$("#Modal_Suppr_Mus").modal('show');
});

$("#subM").click(function() {
	$.post("controller.php", $("#form_x").serialize(), function(data){
		$("#panel_a").load("controller.php?action=musique");
		$("#Modal_Suppr_Mus").modal("hide");
    });
});

</script>