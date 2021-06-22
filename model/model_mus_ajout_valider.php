<?php 
	require "connexionBase.php";
	$db = connexionBase();

	
	$requete = $db->prepare("INSERT INTO musique (mus_titre, mus_date_apparition, mus_auteur_nom, mus_auteur_prenom, mus_duree, mus_pays, mus_region) VALUES (:titre, :dated, :anom, :aprenom, :duree, :pays, :region)");
	$requete->bindParam(":titre", $mus_titre);
	$requete->bindParam(":dated", $mus_date_apparition);
	$requete->bindParam(":anom", $mus_auteur_nom);
	$requete->bindParam(":aprenom", $mus_auteur_prenom);
	$requete->bindParam(":duree", $mus_duree);
	$requete->bindParam(":pays", $mus_pays);
	$requete->bindParam(":region", $mus_region);				
	$requete->execute();
?>