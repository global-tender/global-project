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

			<div class="privacy">
				<h3>Политика Конфиденциальности</h3>
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
