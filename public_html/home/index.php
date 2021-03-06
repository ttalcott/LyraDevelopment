<?php

//grab current Directory
$CURRENT_DIR = __DIR__;

//set page name
$PAGE_TITLE = "Lyra Development | Software Development in Albuquerque, New Mexico";

//load HTML head tag
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<body class="sfooter splash-page">

		<?php require_once($PREFIX . "php/partials/header.php"); ?>
	<div class="sfooter-content">

		<div class="" id="container">
			<div class="" id="overlay">

			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="home-title">
						<h1 class="center large-white poppins animated fadeIn">Lyra Development</h1>
						<h2 class="center raleway sub-title animated fadeIn delay">Custom software solutions to drive your business.</h2>
					</div>
				</div>
			</div>
			<div class="container-fluid center">
				<div class="row">
					<a class="clear-button animated fadeIn delay" href="/contact/" role="button">Contact Us</a>
				</div>
			</div>
		</div>

		<main>
			<div class="container-fluid">
				<div class="row no-top-margin">
					<div class="blue-background">
						<h1 CLASS="large-white no-top-margin heading1">WHAT WE DO</h1>
					</div>
				</div>
			</div>

		</main>
	</div>
	<script src="<?php echo $PREFIX ?>js/animation.js"></script>
</body>
