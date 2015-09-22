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
		<div class="logo-top-line">
			&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;&#8209;
		</div>
		<div class="gk">Г</div>К&nbsp;&nbsp;Глобал-Проект
	</div>

	<div class="full-wrapper">

		<div class="index-slide0">
			<div class="index-slide0-overlay"></div>
			
			<div class="index-slide0-main-text">
				<p class="fittext-slide0 clean global-text text-branding">РАЗРАБАТЫВАЕМ ПРОЕКТ ПЛАНИРОВКИ ТЕРРИТОРИИ И МЕЖЕВАНИЯ</p>
			</div>

			<?php
			/* Do not show background video on mobile devices */
			$useragent=$_SERVER['HTTP_USER_AGENT'];
			if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
				echo '<video autoplay="" loop="" muted="" src="/img/video3.webm" class="video-bg"></video>';
			?>

			<a href="#" class="down-link"><i class="fa fa-angle-double-down"></i></a>

		</div>

		<div class="index-slide1">
			<div class="index-slide1-overlay"></div>

			<div class="index-slide1-main-text">
				<p class="fittext-slide1 clean global-text">
					Наши преимущества по которым Вам стоит нас выбрать
				</p>
				<ul>
					<li class="fittext-slide1">Наши сотрудники — профессионалы, знающие и любящие свое дело</li>
					<li class="fittext-slide1">Накопленный опыт позволяет легко решать задачи любой  сложности</li>
					<li class="fittext-slide1">Реализовано уже более <b>70</b>  проектов</li>
				</ul>
			</div>

			<div class="down-link-container">
				<a href="#" class="down-link-slides"><i class="fa fa-angle-double-down"></i></a>
			</div>

		</div>

		<div class="index-slide2">
			<div class="index-slide2-overlay"></div>

			<div class="index-slide2-main-text">
				<p class="fittext-slide2 clean global-text">
					Разрабатывая проект планировки территории,
					мы руководствуемся градостроительными нормами РФ, что гарантирует
					полное соответствие проекта всем существующим требованиям
				</p>
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

	<footer class="footer">
		<div class="footer-overlay"></div>

		<div class="footer-main-text0">

			<p class="clean global-text logo-footer-text">ГК Глобал-Проект</p>

			<p class="clean global-text footer-menu">
				<a href="/projects/" title="Проекты">Проекты</a>
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
	include_once("./footer.php");
?>