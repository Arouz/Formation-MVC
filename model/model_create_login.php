<?php 	
	require "connexionBase.php";
	$db = connexionBase();

	$str_requete = "	SELECT l.id
						FROM login AS l
						WHERE l.identifiant ='$identifiant'";
					
	$result = $db->query($str_requete);
	$compteur = $result->rowCount();

	if ($compteur == 1) {
		die("non");
	}
	else {
		$requete = $db->prepare("INSERT INTO login (identifiant, motdepasse) VALUES (:ident, :mdp)");
		$requete->bindParam(":ident", $identifiant);
		$requete->bindParam(":mdp", $motdepasse);			
		$requete->execute();
		die("oui");
	}
?>