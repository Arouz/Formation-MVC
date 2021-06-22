<div class="modal fade" id="Modal_Modif_Mus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulaire de modification : <?php echo $lien->mus_titre ?></h4>
      </div>
      <div class="modal-body">


        <form id="form_x">
		  <div class="alert alert-danger cache centertext" id="MessErr" role="alert"></div>
		  <div class="form-group">
		    <input name="id" type="text" class="form-control hidden" id="id" value="<?php echo $lien->mus_id ?>" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="titre">Titre <span class="ast">*</span></label>
		    <input name="titre" type="text" class="form-control" id="titre" value="<?php echo $lien->mus_titre ?>" placeholder="Entrez le titre de la musique">
		  </div>
		  <div class="form-group">
		    <label for="date">Date d'apparition <span class="ast">*</span></label>
		    <input name="date" type="date" class="form-control" id="date" value="<?php echo $lien->mus_date_apparition ?>">
		  </div>
		  <div class="form-group">
		    <label for="anom">Nom de l'auteur <span class="ast">*</span></label>
		    <input name="anom" type="text" class="form-control" id="anom" value="<?php echo $lien->mus_auteur_nom ?>" placeholder="Entrez le nom de l'auteur de la musique">
		  </div>
		  <div class="form-group">
		    <label for="aprenom">Prenom de l'auteur</label>
		    <input name="aprenom" type="text" class="form-control" id="aprenom" value="<?php echo $lien->mus_auteur_prenom ?>" placeholder="Entrez le prenom de l'auteur de la musique">
		  </div>
		  <div class="form-group">
		    <label for="duree">Durée de la musique <span class="ast">*</span></label>
		    <input name="duree" type="time" class="form-control" id="duree" value="<?php echo $lien->mus_duree ?>">
		  </div>
  		  <div class="form-group">
		    <label for="pays">Pays <span class="ast">*</span></label>
		    <input name="pays" type="text" class="form-control" id="pays" value="<?php echo $lien->mus_pays ?>" placeholder="Entrez le pays dont est originaire la musique">
		  </div>
		  <div class="form-group">
		    <label for="region">Region</label>
		    <input name="region" type="text" class="form-control" id="region" value="<?php echo $lien->mus_region ?>" placeholder="Entrez la region dont est originaire la musique">
		  </div>
		  <div><span class="ast">/!\ Les champs suivi d'un * sont obligatoires /!\</span></div>
		  <input type="hidden" name="action" value="mus_valider_modif" />
		</form>
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à la liste</button>
        <button id="subM" type="button" class="btn btn-success">Modifier</button>
      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
 	$("#Modal_Modif_Mus").modal('show');
});

$("#subM").click(function() {
	if (validform() == true) {
		$.post("controller.php", $("#form_x").serialize(), function(data){
			$("#panel_a").load("controller.php?action=musique");
			$("#Modal_Modif_Mus").modal("hide");
	    });
	} 
	else {
		$("#MessErr").slideDown(500).delay(2500).slideUp(900);
	}
});

function validform() {

	if ($("#titre").val() == "") {
		$("#MessErr").text("Veuillez saisir le titre.");
		return false;
	};
	if ($("#date").val() == "") {
		$("#MessErr").text("Veuillez saisir la date de création du titre.");
		return false;
	};
	if ($("#anom").val() == "") {
		$("#MessErr").text("Veuillez saisir le nom de l'auteur.");
		return false;
	};
	if ($("#duree").val() == "") {
		$("#MessErr").text("Veuillez saisir la durée du titre.");
		return false;
	};
	if ($("#pays").val() == "") {
		$("#MessErr").text("Veuillez saisir le pays d'origine du titre.");
		return false;
	};
	return true;
}

</script>