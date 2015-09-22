<?php
    global $page_title;
    $page_title = "Проекты";
    include_once("../header.php");
?>

<div class="container">

	<header class="head-menu">
		<nav>
			<ul class="menu-ul">
				<li class="menu-li"><a href="/">Главная</a></li>
				<li class="menu-li"><a href="/projects/">Проекты</a></li>
				<li class="menu-li"><a href="#" class="contacts">Контакты</a></li>
			</ul>
		</nav>
	</header>

	<div class="logo-top logo-small">
		<div class="logo-top-line logo-small">
			&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;
		</div>
		<div class="gk logo-small">Г</div>К&nbsp;&nbsp;Глобал-Проект
	</div>

	<div class="projects-top">
		<div class="projects-top-overlay"></div>
	</div>

	<div class="projects-wrapper">
		<div class="projects">
			<div class="projects-h2"><p class="clean">Проекты</p></div>

			<div class="projects-imgs highslide-gallery">
				<a class="highslide project-img" href="/img/projects/project_009.jpg" onclick="return hs.expand(this, config1);">
					<img src="/img/projects/sml/sml_project_009.jpg" alt="Пример проекта" />
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
				<a class="highslide project-img" href="/img/projects/project_004.jpg" onclick="return hs.expand(this, config1);">
					<img src="/img/projects/sml/sml_project_004.jpg" alt="Пример проекта" />
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

	<footer class="footer">
		<div class="footer-overlay"></div>

		<div class="footer-main-text0">

			<p class="clean global-text logo-footer-text">ГК Глобал-Проект</p>

			<p class="clean global-text footer-menu">
				<a href="/" title="Проекты">Главная</a>
			</p>

		</div>

		<div id="map"></div>

		<div class="footer-main-text1">
			<p class="fittext-footer1 clean global-text contacts-text1">
				Тел.:  89508693501 <br />
				E-mail:  <a href="mailto:global-proect@mail.ru">global-proect@mail.ru</a>
			</p>
			<p class="fittext-footer2 clean global-text contacts-text2">
				Россия, г. Ростов-на-Дону<br />
				ул. Серафимовича д. 58 А, оф. 502<br />
			</p>
		</div>

	</footer>

</div>

<?php
    include_once("../footer.php");
?>