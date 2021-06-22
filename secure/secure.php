<?php 
	session_start();

	if (isset($_SESSION["auth"]) == false) {
		echo("
			<script>
				$('#panel_f').load('controller.php?action=compte_requis');
			</script>
			");
		die();
	}
?>