<?php 
	require "connexionBase.php";
	$db = connexionBase();
	
	$str_requete = "SELECT * FROM musique WHERE mus_id=".$mus_id;
	$result = $db->query($str_requete);
	$lien = $result->fetch(PDO::FETCH_OBJ);
 ?>