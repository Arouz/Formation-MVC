<?php 
	session_start();
	$_SESSION = array();
	session_destroy();
	echo("<script>$('#navb').load('controller.php?action=navb');</script>");
 ?>