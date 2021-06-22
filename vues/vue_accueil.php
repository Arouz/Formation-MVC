<div class="container">
	<div class="jumbotron col-md-10 col-md-offset-1 bgw">
		<h1 id='fr'>Fil Rouge !</h1>
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<br>
		<p class="centertext hidden-xs">
			<a class="btn btn-success btn-lg link-grp" href="#" role="button">Groupes</a>
			<a class="btn btn-success btn-lg link-ren" href="#" role="button">Rencontres</a>
			<a class="btn btn-success btn-lg link-oeu" href="#" role="button">Oeuvres</a>
			<a class="btn btn-success btn-lg link-int" href="#" role="button">Interrogation</a>
		</p>
		<br>
		<br>
		<p class="centertext hidden-xs">
			<a href="../wordpress/"><img src="img/wp.png" /></a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="../prestashop/"><img src="img/ps.png" /></a>
			&nbsp;&nbsp;
			<a href="../forum/"><img src="img/phpbb.png" /></a>
		</p>
	</div>
	<br>
</div>
<script>

$(".link-grp").click(function() {
		$("#panel_a").load("controller.php?action=groupe");
	});

$(".link-ren").click(function() {
		$("#panel_a").load("controller.php?action=rencontre");
	});

$(".link-oeu").click(function() {
		$("#panel_a").load("controller.php?action=musique");
	});

$(".link-int").click(function() {
		$("#panel_a").load("controller.php?action=accueil");
	});

$(".link-int").click(function() {
		$("#panel_a").load("controller.php?action=interrogation");
	});

</script>