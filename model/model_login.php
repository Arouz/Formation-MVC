<?php 	
	require "connexionBase.php";
	$db = connexionBase();

	session_start();

	$str_requete = "	SELECT l.id
						FROM login AS l
						WHERE l.identifiant ='$identifiant' and l.motdepasse='$motdepasse'";
					
	$result = $db->query($str_requete);
	$compteur = $result->rowCount();

	if ($compteur == 1) {
		$_SESSION["auth"] = "$identifiant";
		die("ok");
	}
	else {
		die("error");
	}
?>
