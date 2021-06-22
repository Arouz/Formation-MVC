<div class="modal fade" id="Modal_Ajout_Mus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulaire d'ajout</h4>
      </div>
      <div class="modal-body">


        <form id="form_z">
         <div class="alert alert-danger cache centertext" id="MessErr" role="alert"></div>
		  <div class="form-group" onSubmit="valideform();">
		    <label for="titre">Titre <span class="ast">*</span></label>
		    <input name="titre" type="text" class="form-control" id="titre" value="" placeholder="Entrez le titre de la musique">
		  </div>
		  <div class="form-group">
		    <label for="dated">Date d'apparition <span class="ast">*</span></label>
		    <input name="dated" type="date" class="form-control" id="dated" value="" required>
		  </div>
		  <div class="form-group">
		    <label for="anom">Nom de l'auteur <span class="ast">*</span></label>
		    <input name="anom" type="text" class="form-control" id="anom" value="" placeholder="Entrez le nom de l'auteur de la musique">
		  </div>
		  <div class="form-group">
		    <label for="aprenom">Prenom de l'auteur </label>
		    <input name="aprenom" type="text" class="form-control" id="aprenom" value="" placeholder="Entrez le prenom de l'auteur de la musique">
		  </div>
		  <div class="form-group">
		    <label for="duree">Durée de la musique <span class="ast">*</span></label>
		    <input name="duree" type="time" class="form-control" id="duree" step="1" value="">
		  </div>
  		  <div class="form-group">
		    <label for="pays">Pays <span class="ast">*</span></label>
		    <input name="pays" type="text" class="form-control" id="pays" value="" placeholder="Entrez le pays d'origine de la musique">
		  </div>
		  <div class="form-group">
		    <label for="region">Region</label>
		    <input name="region" type="text" class="form-control" id="region" value="" placeholder="Entrez la region d'origine de la musique">
		  </div>
		  <div><span class="ast">/!\ Les champs suivi d'un * sont obligatoires /!\</span></div>
		  <input type="hidden" name="action" value="mus_valider_ajout" />
		</form>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à la liste</button>
        <button id="sub2" type="button" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
 	$("#Modal_Ajout_Mus").modal('show');
});

$("#sub2").click(function() {
	if (validform() == true) {
		$.post("controller.php", $("#form_z").serialize(), function(data){
			$("#panel_a").load("controller.php?action=musique");
			$("#Modal_Ajout_Mus").modal("hide");
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