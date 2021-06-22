<?php 
	require "connexionBase.php";
	$db = connexionBase();

	$requete = $db->prepare("DELETE FROM rencontre WHERE ren_id = :id");
	$requete->bindParam(":id", $ren_id);		
	$requete->execute();
?>