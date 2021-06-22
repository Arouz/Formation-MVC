<?php 
	require "connexionBase.php";
	$db = connexionBase();

	
	$requete = $db->prepare("INSERT INTO rencontre (ren_nom, ren_lieu, ren_date_debut, ren_date_fin, ren_periodicite, ren_nombre_personne) VALUES (:nom, :lieu, :debut, :fin, :period, :nombre)");
	$requete->bindParam(":nom", $ren_nom);
	$requete->bindParam(":lieu", $ren_lieu);
	$requete->bindParam(":debut", $ren_date_debut);
	$requete->bindParam(":fin", $ren_date_fin);
	$requete->bindParam(":period", $ren_periodicite);
	$requete->bindParam(":nombre", $ren_nombre_personne);				
	$requete->execute();
?>