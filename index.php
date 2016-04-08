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
		ГК Глобал-Проект
	</div>

	<div class="full-wrapper">

		<div class="index-slide0">
			<div class="index-slide0-overlay"></div>
			
			<div class="index-slide0-main-text">
				<h1 class="fittext-slide0 clean global-text text-branding">РАЗРАБАТЫВАЕМ ПРОЕКТ ПЛАНИРОВКИ ТЕРРИТОРИИ И ПРОЕКТ МЕЖЕВАНИЯ</h1>
			</div>

			<a href="#" class="down-link"><i class="fa fa-angle-double-down"></i></a>

		</div>


		<div class="index-slide1">
			<div class="index-slide1-overlay"></div>

			<div class="index-slide1-main-text">
				<p class="fittext-slide1 clean global-text">
					Грамотность выполнения проекта планировки, позволит:
				</p>
				<ul>
					<li class="fittext-slide1">Снизить будущие затраты по расположению линейных объектов</li>
					<li class="fittext-slide1">Увеличить полезную площадь на 20-25%</li>
				</ul>
			</div>

		</div>


		<div class="index-slide3">
			<div class="index-slide3-overlay"></div>

			<div class="index-slide3-main-text">
				<p class="fittext-slide3 clean global-text">
					Проект планировки территории — основа для формирования градостроительных планов земельных участков, необходимых для получения разрешения на строительство, также содержит основные показатели, <b>необходимые для определения инвестиционной привлекательности территории</b> – численность населения и возможные объёмы нового строительства (жилищного, делового, социального, культурно-бытового, транспортного, инженерного).
				</p>
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
