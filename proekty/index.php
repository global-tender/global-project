<?php
		global $page_title;
		$page_title = "Проекты";
		include_once("../header.php");
?>

<div class="container">

	<header class="head-menu">
		<nav>
			<ul class="menu-ul menu-inner-page">
				<li class="menu-li"><a href="/" class="">Главная</a></li>
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

		<div class="index-slide0 index-slide0-inner">
			<div class="index-slide0-overlay"></div>
			<div class="index-slide0-main-text"></div>
		</div>


		<div class="index-slide3 index-slide3-inner">
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

					<div class="projects_arr_l">left</div>
					<div class="projects_arr_r">right</div>

				</div>

			</div>

			<div class="order_call_button order_project_button">
				<a href="#" onclick="return orderCall();" title="Заказать проект">Заказать проект</a>
			</div>

		</div>

	</div>

<?
include_once("../footer-slide.php");
?>

</div>

<?php
include_once("../footer.php");
?>

<script>

	$('.projects-imgs').jcarousel();

		$('.projects_arr_l')
			.on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			})
			.on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '-=1'
			});

		$('.projects_arr_r')
			.on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			})
			.on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '+=1'
			});

</script>