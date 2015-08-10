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
				<h2>Boarding</h2>
				
				<p>We promise that our love of horses will shine through with the superior care we provide.  Our stables and staff are friendly, not fancy.</p>
				
				<h3>Feeding</h3>
				<p>Horses are turned out daily for grazing (weather permitting).  They are fed hay and grain twice a day.  You are responsible for providing any supplements you desire; we will administer them at no extra charge.</p>
					
				<h3>Cleaning</h3>
				<p>Stalls are picked daily and stripped weekly with new sawdust bedding.</p>

				<h3>Blacksmith</h3>
				<p>We have a blacksmith who visits regularly.  You are welcome to use your own blacksmith as well.</p>
				
				<h3>Rates</h3>
				<p>Please contact us for pricing: <a href="tel:6107774204">(610) 777-4204</a></p>
			</div>
			
			<div id="pageImage" style="margin-top: 40px;">
			
				<div id="carousel" class="owl-carousel">
					<img src="img/boarding/stable.jpg" />
					<img src="img/boarding/gate.jpg" />
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
