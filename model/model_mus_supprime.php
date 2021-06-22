<?php 	require "connexionBase.php";
	$db = connexionBase();

	$str_requete2 = "	SELECT i.mus_id
						FROM interprete AS i
						INNER JOIN musique AS m ON i.mus_id=m.mus_id
						WHERE m.mus_id =".$mus_id;
					
	$result2 = $db->query($str_requete2);

	$compteur = $result2->rowCount();

	if ($compteur == 0) {
		
		$str_requete = "SELECT * FROM musique WHERE mus_id=".$mus_id;
		$result = $db->query($str_requete);

		$lien = $result->fetch(PDO::FETCH_OBJ);

	}
?>