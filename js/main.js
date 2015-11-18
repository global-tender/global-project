/* Link-arrow to second slide */
var down_link = (function(){
	$(document).on('click', '.down-link', function(){
		$('html, body').animate({
			scrollTop: $(window).height()
		}, 500);
		return false;
	});
})();

/* Link-arrow to next slides */
var down_link_container = (function(){
	$(document).on('click', '.down-link-container', function(){
		$('html, body').animate({
			scrollTop: $(this).parent().offset().top + $(window).height()
		}, 500);
		return false;
	});
})();

$(document).ready(function(){
	$('.down-link, .text-branding, .head-menu').hover(function(){
			$('.down-link').animate({"bottom":"-2%"}, 'slow');
		}, function(){
			$('.down-link').animate({"bottom":"-2%"}, 'slow');
	});

	$('.down-link, .text-branding, .head-menu').hover(function(){
			$('.down-link').animate({"bottom":"2%"}, 'slow');
		}, function() {
			$('.down-link').animate({"bottom":"2%"}, 'slow');
	});

	$('.down-link-container').hover(function(){
			$('.down-link-container').animate({"margin-bottom":"-12px"}, 'slow');
		}, function(){
			$('.down-link-container').animate({"margin-bottom":"-12px"}, 'slow');

	});

	$('.down-link-container').hover(function(){
			$('.down-link-container').animate({"margin-bottom":"12px"}, 'slow');
		}, function(){
			$('.down-link-container').animate({"margin-bottom":"12px"}, 'slow');
			
	});
});

/* // Link-arrow to next slides */

/* Scroll to Contacts */
var contacts_link = (function(){
	$(document).on('click', '.contacts', function(){
		$('html, body').animate({
			scrollTop: $('.footer').offset().top
		}, 1000);
		return false;
	});
})();
/* //Scroll to contacts */

/* Disable global scroll above some DIV */
$(document).ready(function () {
	$('.scroll-only-this').bind('mousewheel DOMMouseScroll', function (e) {
		var e0 = e.originalEvent,
			delta = e0.wheelDelta || -e0.detail;
		this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
		e.preventDefault();
	});
});
/* //Disable global scroll above some DIV */