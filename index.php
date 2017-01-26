<?php
	global $page_title;
	$page_title = "";
	include_once("./header.php");
?>

<div class="container">

	<header class="head-menu">
		<nav>
			<ul class="menu-ul">
				<li class="menu-li"><a href="#" class="projects-menu">Проекты</a></li>
				<li class="menu-li"><a href="#" class="contacts">Контакты</a></li>
				<li class="menu-li"><a href="#" class="ask-question" title="Задать вопрос" onclick="return showForm();">Задать вопрос</a></li>
			</ul>
		</nav>
	</header>

	<div class="company-top">
		ГК Глобал-Проект
	</div>

	<div class="logo-top">
		<?if ($is_mobile) {?><a href="tel:+79508693501">+7 950 869 35 01</a><?} else {?>+7 950 869 35 01<?}?>
	</div>

	<div class="full-wrapper">

		<div class="index-slide0">
			<div class="index-slide0-overlay"></div>
			
			<div class="index-slide0-main-text">
				<h1 class="fittext-slide0 clean global-text text-branding">РАЗРАБАТЫВАЕМ ПРОЕКТ ПЛАНИРОВКИ ТЕРРИТОРИИ И ПРОЕКТ МЕЖЕВАНИЯ</h1>

				<div class="index-slide0-under-main-text">
					<h2>Градостроительный план</h2>
					<h2>Генеральный план</h2>
					<h2>Линейный объект</h2>
				</div>
			</div>

			<div class="first-project-free-text">
				<h3>В короткие сроки!</h3>
			</div>

			<div class="order_call_button">
				<a href="#" onclick="return getPrice();" title="Рассчитать стоимость">Рассчитать стоимость</a>
			</div>

			<a href="#" class="down-link"><i class="fa fa-angle-double-down"></i></a>

		</div>

		<div class="index-noslide">
			<h3>дизайн участка</h3>
			<h3>проект планировки</h3>
			<h3>планировка участка</h3>
			<h3>проект территория</h3>
			<h3>проект участка</h3>
			<h3>проект межевания</h3>
			<h3>проект планировки территории</h3>
			<h3>межевание территории</h3>
			<h3>проект межевания территории</h3>
			<h3>планировка и застройка</h3>
			<h3>земельный проект</h3>
			<h3>проект планировки и межевания</h3>
			<h3>проект земельного участка</h3>
			<h3>как спланировать участок</h3>
			<h3>утвержденный проект</h3>
			<h3>планировка и межевание территории</h3>
			<h3>проекты планировки и межевания территории</h3>
			<h3>планировка земельного участка</h3>
			<h3>разработка проекта планировки</h3>
			<h3>стоимость планировки</h3>
			<h3>проект планировки участка</h3>
			<h3>проект территория участки</h3>
			<h3>проект планировки стоимость</h3>
			<h3>утвержденные проекты планировки</h3>
			<h3>планировка территории стоимость</h3>
			<h3>земельные участки</h3>
			<h3>кадастровый участок</h3>
			<h3>земельная кадастровая</h3>
			<h3>кадастровый земельный участок</h3>
			<h3>план развития</h3>
			<h3>участок соток</h3>
			<h3>градостроительный кодекс</h3>
			<h3>разрешение на строительство</h3>
			<h3>план проекта</h3>
			<h3>глобал-проект.рф</h3>
			<h3>Разработанные проекты</h3>
			<h3>Список проектов планировки территории</h3>

			<p>Проект планировки территории, Чертеж межевания территории, Разработка проектов планировки территории, Разработка проектов инженерных сетей, Проекты на подведение газа, Проекты на подведение канализации, Проект на подведение воды, Проект планировки водоснабжения, Проект планировки газа, Проект планировки теплоснабжения, Проект планировки электроснабжения, Генплан, генеральный план, проект планировки, проект планировки и межевания территории, разработка проекта планировки территории, генплан поселка, генплан района, генплан застройки, генплан города, генплан микрорайона, строительство Ростов-на-Дону, коттеджный поселок, Разрешение сро, Вступление Сро, Получение Сро</p>

		</div>


		<div class="index-noslide">
			<div class="index-slide1-overlay"></div>

			<div class="index-slide1-main-text">
				<p class="fittext-slide1 clean global-text">
					Выполнения проекта планировки территории у нас, позволит:
				</p>
				<ul>
					<li class="fittext-slide1">Своевременно согласовать проект в администрации</li>
					<li class="fittext-slide1">Увеличить полезную площадь</li>
					<li class="fittext-slide1">Снизить затраты на строительстве</li>
					<li class="fittext-slide1">Сделать проект современным и привлекательным</li>
				</ul>
			</div>

		</div>


		<div class="index-slide3">
			<div class="index-slide3-overlay"></div>

			<div class="projects-wrapper">
				<div class="projects">
					<div class="projects-h2"><h2 class="clean">Наши проекты</h2></div>

					<div class="projects-imgs highslide-gallery">
						<a class="highslide project-img" href="/img/projects/project_011-min.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_011-min.jpg" alt="Схема ПЗУ откорректированная" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_004.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_004.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_008.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_008.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_000.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_000.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_001.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_001.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_002.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_002.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_003.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_003.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_009.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_009.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_005.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_005.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_006.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_006.jpg" alt="Пример проекта" />
						</a>
						<a class="highslide project-img" href="/img/projects/project_007.jpg" onclick="return hs.expand(this, config1);">
							<img src="/img/projects/sml/sml_project_007.jpg" alt="Пример проекта" />
						</a>
					</div>

				</div>
			</div>

			<div class="order_call_button order_project_button">
				<a href="#" onclick="return orderCall();" title="Заказать проект">Заказать проект</a>
			</div>

		</div>

	</div>

	<?
	include_once("./footer-slide.php");
	?>

</div>

<?php
	include_once("./footer.php");
?>
