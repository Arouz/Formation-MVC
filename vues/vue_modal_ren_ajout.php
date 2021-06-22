<div class="modal fade" id="Modal_Ren_Ajout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulaire d'ajout</h4>
      </div>
      <div class="modal-body">


        <form id="form_3">
          <div class="alert alert-danger cache centertext" id="MessErr" role="alert"></div>
		  <div class="form-group">
		    <label for="nom">Nom <span class="ast">*</span></label>
		    <input name="nom" type="text" class="form-control" id="nom" value="" placeholder="Entrez le nom de la rencontre">
		  </div>
		  <div class="form-group">
		    <label for="nom">Lieu <span class="ast">*</span></label>
		    <input name="lieu" type="text" class="form-control" id="lieu" value="" placeholder="Entrez le lieu de la rencontre">
		  </div>
		  <div class="form-group">
		    <label for="debut">Date de début <span class="ast">*</span></label>
		    <input name="debut" type="date" class="form-control" id="debut" value="">
		  </div>
		  <div class="form-group">
		    <label for="fin">Date de fin <span class="ast">*</span></label>
		    <input name="fin" type="date" class="form-control" id="fin" value="">
		  </div>
		  <div class="form-group">
		    <label for="period">Periodicite</label>
		    <input name="period" type="text" class="form-control" id="period" value="" placeholder="Entrez la periodicité de la rencontre">
		  </div>
		  <div class="form-group">
		    <label for="nombre">Nombre de personne <span class="ast">*</span></label>
		    <input name="nombre" type="text" class="form-control" id="nombre" value="" placeholder="Entrez le nombre de personne">
		  </div>
		  <div><span class="ast">/!\ Les champs suivi d'un * sont obligatoires /!\</span></div>
		  <input type="hidden" name="action" value="ren_valider_ajout" />
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
 	$("#Modal_Ren_Ajout").modal('show');
});

$("#sub2").click(function() {
	if (validform() == true) {
		$.post("controller.php", $("#form_3").serialize(), function(data){
			$("#panel_a").load("controller.php?action=rencontre");
			$("#Modal_Ren_Ajout").modal("hide");
		});
	} 
	else {
		$("#MessErr").slideDown(500).delay(2500).slideUp(900);
	}
});

function validform() {

	if ($("#nom").val() == "") {
		$("#MessErr").text("Veuillez saisir le nom de la rencontre.");
		return false;
	};
	if ($("#lieu").val() == "") {
		$("#MessErr").text("Veuillez saisir le lieu de la rencontre.");
		return false;
	};
	if ($("#debut").val() == "") {
		$("#MessErr").text("Veuillez saisir la date de commencement.");
		return false;
	};
	if ($("#fin").val() == "") {
		$("#MessErr").text("Veuillez saisir la date de fin.");
		return false;
	};
	if ($("#nombre").val() == "") {
		$("#MessErr").text("Veuillez saisir le nombre de personnes attendu.");
		return false;
	};
	return true;
}

</script>