		<footer>
			<span class="address">1 Bridle Ln, Mohnton, PA 19540</span>
			<span class="phone"><a href="tel:6107774204">(610) 777 - 4204</a></span>
		</footer>
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
					margin: 10,
					items:1
				});
				
				$(window).resize(function() {
					pushFooterToViewportBottom();
				});
				pushFooterToViewportBottom();
			});
			
			/**
			 * This function will push the footer to the bottom of the viewport if page content isn't
			 * long enough to keep it down.
			 */
			function pushFooterToViewportBottom() {
				//Reset content div height first
				var contentDiv = $("#content");
				contentDiv.css("min-height", 0);
				
				//Calculate if change is needed
				var viewportHeight = $(window).height();
				var footerBottom = $("footer").get(0).getBoundingClientRect().bottom;
				var difference = viewportHeight - footerBottom;

				//Only make changes if footer is not beyond viewport bottom already.
				if(difference > 0) {
					contentDiv.css("min-height", contentDiv.outerHeight() + difference);				
				}
			}
		</script>
