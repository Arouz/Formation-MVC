<?php
	require "connexionBase.php";
	$db = connexionBase();
	
	$requete = $db->prepare("UPDATE rencontre SET ren_nom=:nom, ren_lieu=:lieu, ren_date_debut=:debut, ren_date_fin=:fin, ren_periodicite=:period, ren_nombre_personne=:nombre WHERE ren_id = :id");
	$requete->bindParam(":id", $ren_id);
	$requete->bindParam(":nom", $ren_nom);
	$requete->bindParam(":lieu", $ren_lieu);
	$requete->bindParam(":debut", $ren_date_debut);
	$requete->bindParam(":fin", $ren_date_fin);
	$requete->bindParam(":period", $ren_periodicite);
	$requete->bindParam(":nombre", $ren_nombre_personne);				
	$requete->execute();
?>