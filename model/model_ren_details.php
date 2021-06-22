<?php 
	require "connexionBase.php";
	$db = connexionBase();
	
	$str_requete = "SELECT * FROM rencontre WHERE ren_id=".$ren_id;
	$result = $db->query($str_requete);
	$lien = $result->fetch(PDO::FETCH_OBJ);
 ?>