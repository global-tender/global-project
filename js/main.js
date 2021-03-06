/* Link-arrow to second slide */
var down_link = (function(){
	$(document).on('click', '.down-link', function(){
		$('html, body').animate({
			scrollTop: $(window).height()
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
});

/* // Link-arrow to next slides */

/* Scroll to Contacts */
var contacts_link = (function(){
	$(document).on('click', '.contacts', function(){
		$('html, body').animate({
			scrollTop: $('.footer').offset().top+1
		}, 1000);
		return false;
	});
})();
/* //Scroll to Contacts */

/* Scroll to Projects */
var contacts_link = (function(){
	$(document).on('click', '.projects-menu', function(){
		$('html, body').animate({
			scrollTop: $('.projects-wrapper').offset().top+1
		}, 1000);
		return false;
	});
})();
/* //Scroll to Projects */

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


addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }



$(document).ready(function() {
	$().UItoTop({ easingType: 'easeOutQuart' });
});

$(document).ready(function(){
	$('#toTop').hover(function(){
		$('#toTop').animate({"margin-bottom":"7px"}, 'fast');
	},
	function(){
		$('#toTop').animate({"margin-bottom":"0px"}, 'fast');
	});
});


$(document).ready(function() {
	if ( $(".fittext-slide0"))
	{
		$(".fittext-slide0").fitText(2, { minFontSize: '15px', maxFontSize: '50px' });
		$(".fittext-slide0_1").fitText(2, { minFontSize: '15px', maxFontSize: '50px' });
		$(".fittext-slide1").fitText(2, { minFontSize: '14px', maxFontSize: '30px' });
		$(".fittext-slide3").fitText(3, { minFontSize: '14px', maxFontSize: '26px' });
	}
});

function showForm()
{
	$.fancybox('/ajax.php?question',{type:'ajax',helpers:{overlay:{locked:true}}});
	return false;
}

function orderCall()
{
	$.fancybox('/ajax.php?order_call',{type:'ajax',helpers:{overlay:{locked:true}}});
	return false;
}

function getPrice()
{
	$.fancybox('/ajax.php?get_price',{type:'ajax',helpers:{overlay:{locked:true}}});
	return false;
}

function ajaxFormTry(ajaxForm){
	$.post(
		ajaxForm.attr('action'),
		ajaxForm.serialize(),
		function(data){
			$.fancybox.open(data);
	});
	return false;
}


$(document).ready(function(){
	$('.jcarousel').jcarousel({wrap: 'both'});

	$('.jcarousel-control-prev')
		.on('jcarouselcontrol:active', function() {
			$(this).removeClass('inactive');
		})
		.on('jcarouselcontrol:inactive', function() {
			$(this).addClass('inactive');
		})
		.jcarouselControl({
			target: '-=1'
		});

	$('.jcarousel-control-next')
		.on('jcarouselcontrol:active', function() {
			$(this).removeClass('inactive');
		})
		.on('jcarouselcontrol:inactive', function() {
			$(this).addClass('inactive');
		})
		.jcarouselControl({
			target: '+=1'
		});
});
