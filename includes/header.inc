<?php require_once("includes/functions.inc"); ?>

<!doctype html>
<html>
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/materialize.css" />
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php echo $config->urls->templates; ?>js/materialize.js" /></script>
	<script src="<?php echo $config->urls->templates; ?>js/main.js" /></script>

	<title><?php echo $title; ?></title>
	</head>
<body>
<header>
<div class="navbar-fixed">
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo right"><img src="<?php echo $logo; ?>"></a>
		<?php
		echo "<ul class='left hide-on-med-and-down'>";
		foreach ($page->parents as $parent) {
			echo "<li class='nav'><a href='{$parent->url}'>{$parent->title} →</a></li>";
		}
		// output the page itself at the end
		echo "<li>{$page->title}</li>";
		echo "</ul>";
		?>
				
<!-- SFG: search working. TODO: autocomplete, clean up inc files & div id=content markup -->
	<form class='search' action='<?php echo $pages->get('template=sk-search')->url; ?>' method='get'>
		<input type='text' name='q' placeholder='Search' value='' />
		<button class="tempbutton" type='submit' name='submit'>Search</button>
	</form>
<!-- /search form -->
		</div>	
	</nav>
</div>
</header>
