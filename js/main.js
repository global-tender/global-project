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

	if ( slideParam == 'down' )
	{
		if ( inViewportTop > 0 )
		{
			diff = elementHeight / 2;

			if ( inViewportTop < diff )
			{
				return true;
			}
		}
	}
	else if ( slideParam == 'up' )
	{
		if (inViewportBottom > 0 )
		{
			diff = elementHeight / 2;

			if ( inViewportBottom < diff )
			{
				return true;
			}
		}
	}
	return false;
};

////////////////////////
//
// Switch between Slides
//
////////////////////////

$(window).on('DOMMouseScroll mousewheel', function(event) {

	if( event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0 )
	{
		slideParam = 'down';

	} else {
		slideParam = 'up';
	}

	if( $('.index-slide1').isSlideOnScreen(slideParam) ){

		disable_scroll();

		var slideTop = $('.index-slide1').offset().top;

		$('html,body').stop().animate({
			scrollTop: slideTop
		}, 1000, function() {
			enable_scroll();
		});
		return false;
	}
	if( $('.index-slide2').isSlideOnScreen(slideParam) ){

		disable_scroll();

		var slideTop = $('.index-slide2').offset().top;
		$('html,body').stop().animate({
			scrollTop: slideTop
		}, 1000, function() {
			enable_scroll();
		});
		return false;
	}
	if( $('.index-slide3').isSlideOnScreen(slideParam) ){

		disable_scroll();

		var slideTop = $('.index-slide3').offset().top;
		$('html,body').stop().animate({
			scrollTop: slideTop
		}, 1000, function() {
			enable_scroll();
		});
		return false;
	}

});
