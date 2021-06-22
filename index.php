<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-confirmation.min.js"></script>
	<title>Accueil</title>
</head>
<body>
	<div id="navb">
	</div>
	<div id="panel_a">
	</div>
	<div id="panel_f">
	</div>
	<div id="panel_c">
	</div>
</body>
</html>

<script>

$(document).ready(function() {
 	$("#panel_a").load("controller.php?action=accueil");
 	$("#navb").load("controller.php?action=navb");
});

</script>