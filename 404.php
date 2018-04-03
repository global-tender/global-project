<?php
header("HTTP/1.0 404 Not Found");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Страница не найдена</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

		* {
			line-height: 1.2;
			margin: 0;
		}

		html {
			color: #888;
			display: table;
			font-family: sans-serif;
			height: 100%;
			text-align: center;
			width: 100%;
		}

		body {
			display: table-cell;
			vertical-align: middle;
			margin: 2em auto;
		}

		h1 {
			color: #555;
			font-size: 2em;
			font-weight: 400;
		}

		p {
			margin: 0 auto;
			width: 280px;
		}

		@media only screen and (max-width: 280px) {

			body, p {
				width: 95%;
			}

			h1 {
				font-size: 1.5em;
				margin: 0 0 0.3em;
			}

		}

		.banner {
			display: block;
			padding-bottom: 30px;
		}

		.banner img {
			width: 100%;
			max-width: 400px;
		}

		.banner a {
			display: block;

			-webkit-transition: all .3s ease;
			-ms-transition: all .3s ease;
			-moz-transition: all .3s ease;
			transition: all .3s ease;
		}

		.banner a:hover {
			-webkit-transform: scale(1.05, 1.05);
			-ms-transform: scale(1.05, 1.05);
			-moz-transform: scale(1.05, 1.05);
			transform: scale(1.05, 1.05);

			-webkit-transition: all .3s ease;
			-ms-transition: all .3s ease;
			-moz-transition: all .3s ease;
			transition: all .3s ease;

		}

	</style>
</head>
<body>

	<div class="banner">
		<a href="http://global-tender.ru" title='Учебный центр "Глобал-Тендер"' target="_blank"><img src="/img/banners/seminars_banner-min.png" alt="banner" /></a>
	</div>

	<h1>Страница не найдена</h1>
	<p>Извините! Страница, которую Вы ищете, не может быть найдена.</p>
	<p><a href="/" title="Главная - проект-территории.рф">Перейти на главную</a></p>
</body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
