		<div id="carousel" class="owl-carousel">
			<div class="item" data-msrc="img/index/ponies-m.png" data-tsrc="img/index/ponies.png" data-dsrc="img/index/ponies.png"></div>
			<div class="item" data-msrc="img/index/yard-m.png" data-tsrc="img/index/yard.png" data-dsrc="img/index/yard.png"></div>
			<div class="item" data-msrc="img/index/sign-m.png" data-tsrc="img/index/sign.png" data-dsrc="img/index/sign.png"></div>
			<div class="item" data-msrc="img/index/horses-m.png" data-tsrc="img/index/horses.png" data-dsrc="img/index/horses.png"></div>
			<div class="item" data-msrc="img/index/feeder-m.png" data-tsrc="img/index/feeder.png" data-dsrc="img/index/feeder.png"></div>
			
			<!--
			<div class="item ponies"></div>
			<div class="item yard"></div>
			<div class="item sign"></div>
			<div class="item horses"></div>
			<div class="item feeder"></div>
			-->
		</div>
		
		<script>
			$(document).ready(function() {
				
				var gallerySize = "";
				
				function resizeGallery() {
					//Desktop
					if(window.matchMedia("(min-width: 62.5em)").matches) {
						if(gallerySize != "desktop") {
							$("div[data-dsrc]").each(function() {
								$(this).css("background-image", "url('" + $(this).data("dsrc") + "')");
							});
							gallerySize = "desktop";
						}
					}
					//Tablet
					else if(window.matchMedia("(min-width: 40.625em)").matches) {
						if(gallerySize != "tablet") {
							$("div[data-tsrc]").each(function() {
								$(this).css("background-image", "url('" + $(this).data("tsrc") + "')");
							});
							gallerySize = "tablet";
						}
					}
					//Mobile
					else {
						if(gallerySize != "mobile") {
							$("div[data-msrc]").each(function() {
								$(this).css("background-image", "url('" + $(this).data("msrc") + "')");
							});
							gallerySize = "mobile";
						}
					}
				}
				
				$(window).resize(resizeGallery);
				resizeGallery();
			});
		</script>