<?php 
	require "connexionBase.php";
	$db = connexionBase();

	$str_requete = "SELECT g.gro_nom
					FROM groupe AS g 
					INNER JOIN interprete AS i ON g.gro_id=i.gro_id 
					INNER JOIN musique AS m ON m.mus_id=i.mus_id 
					WHERE m.mus_id=".$musg_id;
					
	$result = $db->query($str_requete);
?>



								