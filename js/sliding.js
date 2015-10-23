////////////////////////////
//
// Scroll preventing methods
//
////////////////////////////

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = [37, 38, 39, 40];

function preventDefault(e) {
	e = e || window.event;
	if (e.preventDefault)
		e.preventDefault();
	e.returnValue = false;
}

function keydown(e) {
	for (var i = keys.length; i--;) {
		if (e.keyCode === keys[i]) {
			preventDefault(e);
			return;
		}
	}
}

function wheel(e) {
	preventDefault(e);
}

function disable_scroll() {
	if (window.addEventListener) {
		window.addEventListener('DOMMouseScroll', wheel, false);
	}
	window.onmousewheel = document.onmousewheel = wheel;
	document.onkeydown = keydown;
}

function enable_scroll() {
	if (window.removeEventListener) {
		window.removeEventListener('DOMMouseScroll', wheel, false);
	}
	window.onmousewheel = document.onmousewheel = document.onkeydown = null;
}


$(window).scroll(function(e){
	/*e.stopPropagation();*/
	e.preventDefault();
});


///////////////////////////////////////////////////
//
// Slides: methods to define if DOM is in viewport.
//
///////////////////////////////////////////////////

jQuery.fn.isSlideOnScreen = function(slideParam){
	var win = $(window);
	var viewport = {
		top : win.scrollTop()
	}
	viewport.bottom = viewport.top + win.height();

	var elementHeight = this.height();

	var slideOffset = {
		top : this.offset().top
	}

	slideOffset.bottom = slideOffset.top + elementHeight;

	var inViewportTop = viewport.bottom - slideOffset.top + 53;

	var inViewportBottom = slideOffset.bottom - viewport.top + 53;

	if ( slideParam == 'neutral' )
		return false;

	if ( slideParam == 'down' )
	{
		if ( inViewportTop > 0 )
		{
			diff = elementHeight / 1.2;

			if ( inViewportTop < diff )
				return true;
		}
	}
	else if ( slideParam == 'up' )
	{
		if (inViewportBottom > 0 )
		{
			diff = elementHeight / 1.2 ;

			if ( inViewportBottom < diff )
				return true;
		}
	}
	return false;
};

////////////////////////
//
// Switch between Slides
//
////////////////////////
$(window).keydown(function( event ) {

	var slideParam = "neutral";

	if ( event.which == 40 )
		slideParam = "down";
	if ( event.which == 38 )
		slideParam = "up";

	if ( slideParam != "neutral" )
	{
		event.preventDefault();

		$('.index-slide0, .index-slide2, .index-slide3, .footer').each(function(){
			if( $(this).isSlideOnScreen(slideParam) )
			{
				disable_scroll();

				var slideTop = $(this).offset().top;

				$('html,body').stop().animate({
					scrollTop: slideTop
				}, 500, function() {
					enable_scroll();
				});
				return false;
			}
		});

	}

});

$(window).on('DOMMouseScroll mousewheel', function(event) {

	if ($('#map').is(':hover')) {
		return false; /* do not switch slides when mouse is over Yandex Map */
	}


	slideParam = 'neutral';
	if ( event.originalEvent.wheelDelta )
	{
		if ( event.originalEvent.wheelDelta > 0 )
			slideParam = 'up';
		else
			slideParam = 'down';
	}
	else if ( event.originalEvent.detail == -3 )
		slideParam = 'up';
	else if (event.originalEvent.detail == 3 )
		slideParam = 'down';

	if ( slideParam != "neutral" )
	{
		event.preventDefault();

		disable_scroll();

		$('.index-slide0, .index-slide2, .index-slide3, .footer').each(function(){
			if( $(this).isSlideOnScreen(slideParam) )
			{
				var slideTop = $(this).offset().top;

				$('html,body').stop().animate({
					scrollTop: slideTop
				}, 500, function() {
					enable_scroll();
				});
				return false;
			}
		});
	}
});
