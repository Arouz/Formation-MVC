<div>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand lk-acc btn-home" href="#"> Accueil</a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a class="lk-grp" href="#">Groupes</a></li>
					<li><a class="lk-ren" href="#">Rencontres</a></li>
					<li><a class="lk-mus" href="#">Oeuvres</a></li>
					<li><a class="lk-int" href="#" >Interrogation</a></li> 
				    <li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CMS<span class="caret"></span></a>
					    <ul class="dropdown-menu" role="menu">
					    <li>
					    	<a href="../forum/">phpBB</a>
					    	<a href="../prestashop/">PrestaShop</a>
					    	<a href="../wordpress/">WordPress</a>
				    	</li>
				    	</ul>
				    </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php session_start(); ?>
					<?php if (isset($_SESSION["auth"]) == false) { ?>
					<li><a class="lk-clog" href="#">Inscription</a></li>
					<li><a class="lk-log" href="#">Connexion</a></li>
					<?php } ?>
				    <?php if (isset($_SESSION["auth"]) == true) { ?>
				      <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bienvenue <span><?php echo $_SESSION["auth"] ?></span> <span class="caret"></span></a>
				        <ul class="dropdown-menu" role="menu">
				      <li>
				        <a class="lk-dlog" href="#">Déconnexion</a>
				      </li>
				      </ul>
				      </li>
				    <?php } ?>
		        </ul>
	    	</div>
	  	</div>
	</nav>
</div>

<script>

$(".lk-acc").click(function() {
	$("#panel_a").load("controller.php?action=accueil");
	$("#panel_f").empty();
});

$(".lk-grp").click(function() {
	$("#panel_a").load("controller.php?action=groupe");
	$("#panel_f").empty();
});

$(".lk-ren").click(function() {
	$("#panel_a").load("controller.php?action=rencontre");
	$("#panel_f").empty();
});

$(".lk-mus").click(function() {
	$("#panel_a").load("controller.php?action=musique");
	$("#panel_f").empty();
});

$(".lk-int").click(function() {
	$("#panel_a").load("controller.php?action=interrogation");
	$("#panel_f").empty();
});

$(".lk-clog").click(function() {
	$("#panel_f").load("controller.php?action=log_create");
});

$(".lk-log").click(function() {
	$("#panel_f").load("controller.php?action=login");
});

$(".lk-dlog").click(function() {
	$("#panel_f").load("controller.php?action=delog");
	$("#panel_a").load("controller.php?action=accueil");
});

</script>