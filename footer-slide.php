<footer class="footer">

	<div class="footer-main-text0">

		<div>
			<p class="clean global-text logo-footer-text">ГК Глобал-Проект</p>

			<p class="clean global-text footer-menu">
				<? if ( dirname($_SERVER['PHP_SELF']) == "/" ) { ?>
					<a href="/projects/" title="Проекты">Проекты</a>
				<?} else { ?>
					<a href="/" title="Главная">Главная</a>
				<? }?>
			</p>
		</div>

		<div class="footer-contact-details">
			<p class="clean global-text contacts-text1">
				<i class="fa fa-phone fa-1x"></i><span>Тел.:&nbsp;&nbsp; <?if ($is_mobile) {?><a href="tel:+79508693501">+7 950 869 35 01</a><?} else {?>+7 950 869 35 01<?}?> - Алексей</span><br />
				<i class="fa fa fa-envelope-o fa-1x"></i><span>E-Mail:&nbsp;&nbsp; <a href="mailto:global-proect@mail.ru" title="Написать на почту">global-proect@mail.ru</a></span>
			</p>
			<p class="clean global-text contacts-text2">
				<i class="fa fa-home fa-1x"></i>
				<span>Россия, г. Ростов-на-Дону<br />
				ул. Серафимовича д. 58 А, оф. 502<br /></span>
			</p>
		</div>

	</div>

	<div id="map"></div>

</footer>