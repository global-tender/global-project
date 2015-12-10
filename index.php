<?php
	global $page_title;
	$page_title = "";
	include_once("./header.php");
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

	<div class="logo-top">
		ГК  Глобал-Проект
	</div>

	<div class="full-wrapper">

		<div class="index-slide0">
			<div class="index-slide0-overlay"></div>
			
			<div class="index-slide0-main-text">
				<h1 class="fittext-slide0 clean global-text text-branding">РАЗРАБАТЫВАЕМ ПРОЕКТ ПЛАНИРОВКИ ТЕРРИТОРИИ И МЕЖЕВАНИЯ</h1>
			</div>

			<?php
			/* Do not show background video on mobile devices */
			if(!$is_mobile)
			{
				echo '<video autoplay="" loop="" muted="" src="/img/video3.webm" class="video-bg"></video>';
			}
			?>

			<a href="#" class="down-link"><i class="fa fa-angle-double-down"></i></a>

		</div>

		<div class="index-slide2">
			<div class="index-slide2-overlay"></div>

			<div class="index-slide2-main-text">
				<h2 class="fittext-slide2 clean global-text">
					Разрабатывая проект планировки территории,
					мы руководствуемся градостроительными нормами РФ, что гарантирует
					полное соответствие проекта всем существующим требованиям
				</h2>
			</div>

			<div class="down-link-container">
				<a href="#" class="down-link-slides"><i class="fa fa-angle-double-down"></i></a>
			</div>

		</div>

		<div class="index-slide3">
			<div class="index-slide3-overlay"></div>

			<div class="index-slide3-main-text">
				<p class="fittext-slide3 clean global-text">
					Проект планировки территории — основа для формирования градостроительных планов земельных участков, необходимых для получения разрешения на строительство, также содержит основные показатели, <b>необходимые для определения инвестиционной привлекательности территории</b> – численность населения и возможные объёмы нового строительства (жилищного, делового, социального, культурно-бытового, транспортного, инженерного).
				</p>
			</div>

			<div class="down-link-container">
				<a href="#" class="down-link-slides"><i class="fa fa-angle-double-down"></i></a>
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
