<?php
	require "connexionBase.php";
	$db = connexionBase();
	
	$requete = $db->prepare("UPDATE musique SET mus_titre=:titre, mus_date_apparition=:datea, mus_auteur_nom=:anom, mus_auteur_prenom=:aprenom, mus_duree=:duree, mus_pays=:pays, mus_region=:region WHERE mus_id = :id");
	$requete->bindParam(":id", $mus_id);
	$requete->bindParam(":titre", $mus_titre);
	$requete->bindParam(":datea", $mus_date_apparition);
	$requete->bindParam(":anom", $mus_auteur_nom);
	$requete->bindParam(":aprenom", $mus_auteur_prenom);
	$requete->bindParam(":duree", $mus_duree);
	$requete->bindParam(":pays", $mus_pays);
	$requete->bindParam(":region", $mus_region);					
	$requete->execute();
?>