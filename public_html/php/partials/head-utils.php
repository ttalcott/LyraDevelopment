<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/

require_once(dirname((__DIR__), 2) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>

<!DOCTYPE html>

<html lang="en" >
	<head>
		<meta name="keywords" content="Lyra Development, Albuquerque, New Mexico, Albuquerque web development, software development, Albuquerque SEO, search engine optomization" />
		<meta name="description" content="Lyra Development Solutions is a software development company located in Albuquerque, New Mexico. We specialize in creating custom web and mobile friendly applications and websites to boost your company's profile.">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="google-site-verification" content="V8iSDHljV0tj8KSoBPef4OErw60IOb6TefArg7vkP8E" />

		<!-- Latest compiled and minified CSS -->
		<link rel="icon" type="image/xicon" href="<?php echo $PREFIX; ?>images/new-favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:300" rel="stylesheet">

		<!-- animate.css -->
		<link rel="stylesheet" href="<?php echo $PREFIX; ?>css/animate.css" type="text/css">

		<!--Custom CSS -->
		<link rel="stylesheet" href="<?php echo $PREFIX; ?>sass/style.css" type="text/css">
		<link rel="stylesheet" href="<?php echo $PREFIX; ?>css/style.css" type="text/css">

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


		<!-- custom js -->
		<script type="text/javascript" src="<?php echo $PREFIX ?>js/custom-javascript.js"></script>

		<!-- Bootstrap: Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- waypoints.js -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.js"></script>

		<!-- google recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- form-validate -->
		<script type="text/javascript" src="<?php echo $PREFIX; ?>js/form-validate.js"></script>


		<title><?php echo $PAGE_TITLE; ?></title>
	</head>
