<!DOCTYPE html>
<html>
	<head>
		<title>Hilltop Ranch</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- CSS -->
		<link rel="stylesheet" href="plugins/slick/slicknav.css" />
		<link rel="stylesheet" href="plugins/owl/owl.carousel.css" />
		<link rel="stylesheet" href="plugins/owl/owl.theme.default.min.css" />
		<link rel="stylesheet" href="css/styles.css" />

		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
	</head>
	<body>
		<?php include ("includes/header.php");?>

		<div id="headerImage"></div>
		
		<div id="content">
			<div id="pageContent" class="star">
				<h2>Events</h2>
				
				<h3>Pony Parties</h3>
				<p>We will come to you or you can come to us.  Contact us for details, pricing, and reservations.</p>

				<h3>Bon Fires & Picnics</h3>
				<p>We have a large bon fire pit on our mountain with a small clubhouse outfitted with a refridgerator, sink, and connection for electric cookware.  A grill is available for outdoor cooking.    Contact us for details, pricing, and reservations.</p>

				<h3>Hayrides</h3>
				<p>In the fall, we host hayrides and hayride parties.  Take a ride on our tractor pulled haywagon through our many trails.  Hayride parties conclude at our bon fire pit and clubhouse.</p>
			</div>
			
			<div id="pageImage" style="margin-top: 40px;">
			
				<div id="carousel" class="owl-carousel">
					<img src="img/events/bonfire.jpg" />
					<img src="img/riding/trail.jpg" />
				</div>
			</div>
		</div>

		<?php include("includes/footer.php");?>
		
		<!-- JS -->
		<script src="plugins/slick/jquery.slicknav.min.js"></script>
		<script src="plugins/owl/owl.carousel.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#menu").slicknav({
					label: ""
				});
				$(".owl-carousel").owlCarousel({
					loop: true,
					margin: 0,
					items:1
				});
			});
		</script>
	</body>
</html>
