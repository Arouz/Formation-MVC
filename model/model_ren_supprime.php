<?php 
	require "connexionBase.php";
	$db = connexionBase();

	$str_requete2 = "	SELECT p.gro_id 
						FROM participe AS p 
						INNER JOIN rencontre AS r ON p.ren_id=r.ren_id
						WHERE r.ren_id =".$ren_id;
					
	$result2 = $db->query($str_requete2);

	$compteur = $result2->rowCount();

	if ($compteur == 0) {

		$str_requete = "	SELECT * FROM rencontre 
							WHERE ren_id=".$ren_id;
		$result = $db->query($str_requete);
		$lien = $result->fetch(PDO::FETCH_OBJ);
		
	}
?>