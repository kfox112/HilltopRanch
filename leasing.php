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
				<h2>Leasing</h2>
				
				<h3>Half-Lease</h3>
				<p>Horses we own are available for half-lease: you pay half the board, and your horse is available to you at any time unless otherwise needed (for rides or lessons).</p>
				
				<h3>Full-Lease (camp horse)</h3>
				<p>Summer camps return horses to you in the late summer or early fall.  You have exclusive access to your horse until June, when the horses must return to their summer camp.</p>

				<h3>Rates</h3>
				<p>Please contact us for pricing: <a href="tel:6107774204">(610) 777-4204</a></p>
			</div>
			
			<div id="pageImage" style="margin-top: 40px;">
			
				<div id="carousel" class="owl-carousel">
					<img src="img/leasing/feeding.jpg" />
					<img src="img/leasing/twohorses.jpg" />
					<img src="img/leasing/horses-feeding.jpg" />
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
