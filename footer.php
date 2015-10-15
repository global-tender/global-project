
		<a href="#" id="toTop" title="Вверх страницы"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
		<script src="/js/plugins.js"></script>
		<script type="text/javascript" src="/js/move-top.js"></script>
		<script type="text/javascript" src="/js/easing.js"></script>
		<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="/js/jquery.fittext.js"></script>

		<?php
			if ( dirname($_SERVER['PHP_SELF']) == "/" )
			{
				echo "
					<script type='text/javascript' src='/js/sliding.js'></script>
				";
			}
		?>
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
			<?php
				if ( dirname($_SERVER['PHP_SELF']) == "/" )
				{
			?>
				$(".fittext-slide0").fitText(2, { minFontSize: '22px', maxFontSize: '50px' });
				$(".fittext-slide1").fitText(2, { minFontSize: '14px', maxFontSize: '35px' });
				$(".fittext-slide2").fitText(2, { minFontSize: '14px', maxFontSize: '35px' });
				$(".fittext-slide3").fitText(3, { minFontSize: '16px', maxFontSize: '35px' });
			<?	} ?>
			$(".fittext-footer1").fitText(2, { minFontSize: '9px', maxFontSize: '22px' });
			$(".fittext-footer2").fitText(2, { minFontSize: '9px', maxFontSize: '22px' });
			$(".fittext-footer3").fitText(2, { minFontSize: '9px', maxFontSize: '22px' });
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

		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
		try {
		w.yaCounter27745992 = new Ya.Metrika({id:27745992,
		webvisor:true,
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true});
		} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
		d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
		</script>
		<!-- /Yandex.Metrika counter -->

		<!-- Start of StatCounter Code for Default Guide -->
		<script type="text/javascript">
		var sc_project=10625727; 
		var sc_invisible=1; 
		var sc_security="263f9d6c"; 
		var scJsHost = (("https:" == document.location.protocol) ?
		"https://secure." : "http://www.");
		document.write("<sc"+"ript type='text/javascript' src='" +
		scJsHost+
		"statcounter.com/counter/counter.js'></"+"script>");
		</script>
		<noscript><div class="statcounter"><a title="web analytics"
		href="http://statcounter.com/" target="_blank"><img
		class="statcounter"
		src="http://c.statcounter.com/10625727/0/263f9d6c/1/"
		alt="web analytics"></a></div></noscript>
		<!-- End of StatCounter Code for Default Guide -->
	</body>
</html>
