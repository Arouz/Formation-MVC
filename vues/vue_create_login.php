<div class="modal fade" id="Modal_Create_Log" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Création d'un compte</h4>
      </div>
      <div class="modal-body">


    <form id="form_w">
      <div class="alert alert-danger cache centertext" id="MessErr" role="alert"></div>
      <div class="alert alert-success cache centertext" id="MessSuccess" role="alert"></div>
      <div class="form-group">
        <label for="Identifiant">Identifiant</label>
        <input name="identifiant" type="text" class="form-control" id="Identifiant" value="" placeholder="Choississez un identifiant">
      </div>
      <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input name="motdepasse" type="password" class="form-control" id="mdp" value="">
      </div>
      <input type="hidden" name="action" value="valide_log_create" />
    </form>
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour à l'accueil</button>
        <button id="co" type="button" class="btn btn-success cache" >Connectez vous ?</button>
        <button id="env" type="button" class="btn btn-primary">Créer</button>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
  $("#Modal_Create_Log").modal('show');
});

$("#env").click(function() {
    var iden = $("#Identifiant").val();
    if (validform() == true) {
      $.post("controller.php", $("#form_w").serialize(), function(data){
        if (data == "oui") {
          $("#co").removeClass("cache");
          $("#env").addClass("cache");
          $("#MessSuccess").text("Votre compte a été créé !");
          $("#MessSuccess").slideDown(500).delay(2500).slideUp(900);
        }
        else {
          $("#MessErr").text("L'identifiant "+iden+" n'est pas disponible !");
          $("#MessErr").slideDown(500).delay(2500).slideUp(900);
        };
      }); 
    } else {
      $("#MessErr").slideDown(500).delay(2500).slideUp(900);
    }
});

$("#co").click(function() {
  $("#panel_f").load("controller.php?action=login");
});

function validform() {

  if ($("#Identifiant").val() == "") {
    $("#MessErr").text("Veuillez saisir un identifiant.");
    return false;
  };
  if ($("#mdp").val() == "") {
    $("#MessErr").text("Veuillez saisir un mot de passe.");
    return false;
  };
  if ($("#Identifiant").val().length <= 3) {
    $("#MessErr").text("Veuillez saisir un identifiant plus grand (4 caractères minimum).");
    return false;
  };
  if ($("#mdp").val().length <= 3) {
    $("#MessErr").text("Veuillez saisir un mot de passe plus grand (4 caractères minimum).");
    return false;
  };
  return true;
}

</script>