<!DOCTYPE html>
<html>
	<head>
		<title>Hilltop Ranch</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
				<h2>Lessons</h2>
				
				<p>Interested in learing to ride?</p>
				
				<p>We offer lessons for adults as well as for children 7+.  Whether a beginner or experienced rider, theres always something to learn here at Hilltop Ranch.</p>
				
				<h3>Pricing</h3>
				<table>
					<tr>
						<th>Riding Lessons</th>
						<td>$40 per hour</td>
					</tr>
				</table>
			</div>
			
			<div id="pageImage" style="margin-top: 40px;">
			
				<div id="carousel" class="owl-carousel">
					<img src="img/riding/trail.jpg" alt="Trail Photo" />
					<img class="owl-lazy" data-src="img/riding/flower.jpg" alt="Flower Photo" />
					<img class="owl-lazy" data-src="img/riding/trail2.jpg" alt="Trail Photo 2" />
				</div>
			</div>
		</div>

		<?php include("includes/footer.php");?>
		<?php include("includes/analytics.php");?>
	</body>
</html>
