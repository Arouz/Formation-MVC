<div class="modal fade" id="Modal_Ajout_Mus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Acces Interdit</h4>
      </div>
      <div class="modal-body">


      	<div class="alert alert-danger" role="alert">Vous devez posseder un compte et vous authentifier pour acceder à cette page !</div>

	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Retour</button>
        <button id="sub2" type="button" class="btn btn-primary">Créer un compte</button>
        <button id="sub3" type="button" class="btn btn-success">S'identifier</button>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
 	$("#Modal_Ajout_Mus").modal('show');
});

$("#sub2").click(function() {
	$('body').removeClass('modal-open');
	$("#panel_f").load("controller.php?action=log_create");
  $("#panel_a").load("controller.php?action=backgroudcr");
});

$("#sub3").click(function() {
  $('body').removeClass('modal-open');
  $("#panel_f").load("controller.php?action=login");
  $("#panel_a").load("controller.php?action=backgroudcr");
});

</script>