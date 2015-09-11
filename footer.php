
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
			$(".fittext-footer").fitText(2, { minFontSize: '14px', maxFontSize: '22px' });
		</script>

		<!-- Yandex.Map -->
		<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				ymaps.ready(init);
				var myMap, 
					myPlacemark;

				function init(){ 
					myMap = new ymaps.Map("map", {
						center: [47.219104, 39.712066],
						zoom: 16
					}); 

					/*myMap.behaviors.disable("scrollZoom");*/
					
					myPlacemark = new ymaps.Placemark([47.219104, 39.712066], {
						hintContent: 'ГК Глобал-Проект',
						balloonContent: 'Россия, Ростов-на-Дону, улица Серафимовича, 58А, оф. 502'
					}, {
						preset: 'islands#blueDotIcon'
					});
					
					myMap.geoObjects.add(myPlacemark);
				}
			});
			
		</script>
		<!-- //Yandex.Map -->
	</body>
</html>