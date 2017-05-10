<?php

//grab current Directory
$CURRENT_DIR = __DIR__;

//set page name
$PAGE_TITLE = "About LDS";

//load HTML head tag
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
 ?>
<body class="sfooter all-else">
	<div class="sfooter-content background2">
    <?php require_once($PREFIX . "php/partials/header.php"); ?>
			<main class="about-page">
        <section class="about-background">
          <div class="container">
                <div id="about-black" class="jumbotron white">
                  <h1>Discover Lyra Development Solutions.</h1>
                </div>
          </div>
        </section>
				<div class="container">
          <div class="row">
            <div class="col-md-6 black-background">
              <div class="catchy-text jumbotron animated zoomIn">
                <h1>Who are we?</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 about-section-1">
            <p class="animated fadeIn">
              Lyra Development Solutions is an Albuquerque based software development and information techonology company. We focus on building modern, responsive websites, web applications, mobile applications, and other custom software.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="catchy-text jumbotron animated zoomIn">
                <h1 >Our Goal</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-6 about-section-1">
            <p class="animated fadeIn">
              Our goal at Lyra Development Solutions is simple. Deliver quality products that benefit our customers.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="catchy-text jumbotron animated zoomIn">
                <h1>Our Promise</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 about-section-1">
            <p class="animated fadeIn">
              We promise to work with you to deliver a quality product that meets your needs. From the early design stages to final deployment we will be your partner to ensure all of your expectations are met.
            </p>
          </div>

				</div>
			</main>
	</div>
  <?php require_once($PREFIX . "php/partials/footer.php"); ?>
</body>
</html>
