<?php
	$title = "Глобал-Проект.РФ - Разработка инженерных проектов";
	$title = (isset($page_title) && $page_title != "") ? $page_title." - ".$title : $title;
?>
<!doctype html>
<html class="no-js" lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">

		<title><?=$title?></title>
		
		<!-- SEO -->
		<meta name="description" content="Разработка проектов планировки территории и инженерных сетей, Чертеж межевания, Проект планировки водоснабжения газа теплоснабжения электроснабжения канализации, генеральный план поселка района застройки города, Сро">

		<meta name="keywords" content="дизайн участка, проект планировки, проект территория, проект участка, межевание территории, земельный проект, стоимость планировки, глобал-проект, план развития, как спланировать участок, застройка">

		<meta property="og:title" content="Глобал-Проект.РФ - Разработка инженерных проектов">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://xn----7sbchn4accyekm3a.xn--p1ai/">
		<meta property="og:image" content="http://xn----7sbchn4accyekm3a.xn--p1ai/img/global-project.png">
		<meta property="og:site_name" content="Разработка инженерных проектов">
		<meta property="og:description" content="Проект планировки территории, Чертеж межевания территории, Разработка проектов планировки территории, Разработка проектов инженерных сетей, Проекты на подведение газа, Проекты на подведение канализации, Проект на подведение воды, Проект планировки водоснабжения, Проект планировки газа, Проект планировки теплоснабжения, Проект планировки электроснабжения, Генплан, генеральный план, проект планировки, проект планировки и межевания территории, разработка проекта планировки территории, генплан поселка, генплан района, генплан застройки, генплан города, генплан микрорайона, строительство Ростов-на-Дону, коттеджный поселок, Разрешение сро, Вступление Сро, Получение Сро">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:description" content="Проект планировки территории, Чертеж межевания территории, Разработка проектов планировки территории, Разработка проектов инженерных сетей, Проекты на подведение газа, Проекты на подведение канализации, Проект на подведение воды, Проект планировки водоснабжения, Проект планировки газа, Проект планировки теплоснабжения, Проект планировки электроснабжения, Генплан, генеральный план, проект планировки, проект планировки и межевания территории, разработка проекта планировки территории, генплан поселка, генплан района, генплан застройки, генплан города, генплан микрорайона, строительство Ростов-на-Дону, коттеджный поселок, Разрешение сро, Вступление Сро, Получение Сро">
		<!-- /SEO -->

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- fonts -->
		<link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<!-- //fonts -->

		<link rel="stylesheet" href="/css/normalize.css">
		<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" href="/css/style.css?ver=0.012">

		<!-- Google -->
		<script type="text/javascript">
			(function(a,e,c,f,g,h,b,d){var k={ak:"867216113",cl:"mUUDCLSmoWwQ8dXCnQM",autoreplace:"+7 950 869 35 01"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]|| (a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
		</script>

	</head>

	<?php

	$is_mobile = true;
	
	if (isset($_SERVER['HTTP_USER_AGENT']))
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		{
			$is_mobile = false;
		}
	}
	?>

	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
