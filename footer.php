
		<a href="#" id="toTop" title="Вверх страницы"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
		<script src="/js/plugins.js"></script>
		<script type="text/javascript" src="/js/move-top.js"></script>
		<script type="text/javascript" src="/js/easing.js"></script>
		<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="/js/jquery.fittext.js"></script>
		<script src="/js/main.js"></script>

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!-- smooth scrolling -->
		<script type="text/javascript">

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

		</script>
		<!-- //smooth scrolling -->

		<!-- fittext -->
		<script type="text/javascript">
			$(".fittext-slide0").fitText(2, { minFontSize: '22px', maxFontSize: '50px' });
			$(".fittext-slide1").fitText(2, { minFontSize: '14px', maxFontSize: '35px' });
			$(".fittext-slide2").fitText(2, { minFontSize: '14px', maxFontSize: '35px' });
			$(".fittext-slide3").fitText(2, { minFontSize: '14px', maxFontSize: '35px' });
		</script>
	</body>
</html>