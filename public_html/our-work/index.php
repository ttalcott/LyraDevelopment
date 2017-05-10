<?php

//grab current Directory
$CURRENT_DIR = __DIR__;

//set page name
$PAGE_TITLE = "Our Work";

//load HTML head tag
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>

<body class="sfooter all-else">
	<div class="sfooter-content background2">
		<?php require_once($PREFIX . "php/partials/header.php"); ?>
	</div>
	<?php require_once($PREFIX . "php/partials/footer.php"); ?>
</body>
</html>
