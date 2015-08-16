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
	

	$("#menu").slicknav({
		label: ""
	});

	$(".owl-carousel").owlCarousel({
		loop: true,
		lazyLoad: true,
		margin: 10,
		items:1
	});

	//Deferred font loading
	$("head").append("<link rel=\"stylesheet\" href=\"css/webfonts.css\" />");

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
