<footer class="footer">

	<div class="footer-main-text0" itemscope itemtype="http://schema.org/Organization">

		<div>
			<p class="clean global-text logo-footer-text" itemprop="name">ГК Глобал-Проект</p>

			<p class="clean global-text footer-menu">
				<? if ( dirname($_SERVER['PHP_SELF']) == "/" ) { ?>
					<a href="/projects/" title="Проекты">Проекты</a>
				<?} else { ?>
					<a href="/" title="Главная">Главная</a>
				<? }?>
				<a href="#" title="Задать вопрос" onclick="return showForm();">Задать вопрос</a>
			</p>
		</div>

		<div class="footer-contact-details" >
			<p class="clean global-text contacts-text1">
				<i class="fa fa-phone fa-1x"></i><span>Тел.:&nbsp;&nbsp; <?if ($is_mobile) {?><a href="tel:+79508693501" itemprop="telephone">+7 950 869 35 01</a><?} else {?><span itemprop="telephone">+7 950 869 35 01</span><?}?> - Алексей</span><br />
				<i class="fa fa fa-envelope-o fa-1x"></i><span>E-Mail:&nbsp;&nbsp; <a href="mailto:global-proect@mail.ru" title="Написать на почту" itemprop="email">global-proect@mail.ru</a></span>
			</p>
			<p class="clean global-text contacts-text2" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<i class="fa fa-home fa-1x"></i>
				<span itemprop="addressLocality">Россия, г. Ростов-на-Дону</span><br />
				<span itemprop="streetAddress">ул. Серафимовича д. 58 А, оф. 502</span><br />
			</p>
		</div>

	</div>

	<div id="map"></div>

</footer>