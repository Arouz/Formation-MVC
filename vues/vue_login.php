<div class="modal fade" id="Modal_Log" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Connexion</h4>
      </div>
      <div class="modal-body">

      <form id="form_p">
        <div id="Lerror" class="alert alert-danger centertext cache" role="alert">/!\ Identifiant ou mot de passe incorrect /!\</div>
  		  <div class="form-group">
  		    <label for="Identifiant">Identifiant</label>
  		    <input name="identifiant" type="text" class="form-control" id="Identifiant" value="" placeholder="Entrez votre identifiant">
  		  </div>
  		  <div class="form-group">
  		    <label for="mdp">Mot de passe</label>
  		    <input name="motdepasse" type="password" class="form-control" id="mdp" value="">
  		  </div>
  		  <input type="hidden" name="action" value="valide_login" />
  		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à l'accueil</button>
        <button id="env" type="button" class="btn btn-success">S'identifier</button>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
 	$("#Modal_Log").modal('show');
});

$("#env").click(function() {
  var str = $("#Identifiant").val();
  $.post("controller.php", $("#form_p").serialize(), function(data){
    if (data == "ok") {
      $("#Modal_Log").modal("hide");
      $("#navb").load("controller.php?action=navb");
      $("#panel_a").load("controller.php?action=accueil");
    }
    else {
      $("#Lerror").slideDown(500).delay(2500).slideUp(900);
    }
  });
});

</script>