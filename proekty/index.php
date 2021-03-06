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
		<?if ($is_mobile) {?><a href="tel:+78635298832">+7(863)529-88-32</a><?} else {?>+7(863)529-88-32<?}?>
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

					<div class="jcarousel">
						<ul class="projects-imgs highslide-gallery">
							<li><a class="highslide project-img" href="/img/projects/project_011-min.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_011-min.jpg" alt="Схема ПЗУ откорректированная" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_004.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_004.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_008.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_008.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_000.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_000.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_001.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_001.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_002.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_002.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_003.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_003.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_009.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_009.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_005.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_005.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_006.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_006.jpg" alt="Пример проекта" />
							</a></li>
							<li><a class="highslide project-img" href="/img/projects/project_007.jpg" onclick="return hs.expand(this, config1);">
								<img src="/img/projects/sml/sml_project_007.jpg" alt="Пример проекта" />
							</a></li>
						</ul>
					</div>

					<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
					<a href="#" class="jcarousel-control-next">&rsaquo;</a>

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
