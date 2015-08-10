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
				<h2>Riding</h2>
				
				<p>With miles of scenic trails and open fields, Hilltop Ranch is the perfect place for both beginners and experienced riders.  As per your experience level, take a guided walk, trot, canter, or gallop through our trails on one of our friendly and safe horses.  You'll get to see varying landscapes and wildlife as we wind through trails, over creeks and through the woods.  Trail rides are for adults only (18+) but we do offer riding lessons for children.</p>
				
				<h3>Pricing</h3>
				<table>
					<tr>
						<th>Trail Rides</th>
						<td>$35 per hour</td>
					</tr>
					<tr>
						<th>Riding Lessons</th>
						<td>$40 per hour</td>
					</tr>
				</table>
			</div>
			
			<div id="pageImage" style="margin-top: 40px;">
			
				<div id="carousel" class="owl-carousel">
					<img src="img/riding/trail.jpg" />
					<img src="img/riding/flower.jpg" />
					<img src="img/riding/trail2.jpg" />
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
