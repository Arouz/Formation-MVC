<?php 
	require "connexionBase.php";
	$db = connexionBase();

	$requete = $db->prepare("DELETE FROM musique WHERE mus_id = :id");
	$requete->bindParam(":id", $mus_id);		
	$requete->execute();
?>