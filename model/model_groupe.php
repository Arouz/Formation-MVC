<?php 
	require "connexionBase.php";
	$db = connexionBase();

	$str_requete = "SELECT gro_nom,gro_nationalite,gro_date_creation FROM groupe";
	$result = $db->query($str_requete);
	if (!$result) {
		print "PDO::errorInfo():";
		$msg = $db->errorInfo();
		print $msg[2] . "<br />";
		die("Erreur dans la requête ! (str_requete)<br>
		<a href=\"javascript:history.go(-1)\">BACK</a>");
	}
?>