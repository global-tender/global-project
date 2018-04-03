<?php

include_once("./settings.php");
include_once("./functions.php");

/* ********************** */
/* Форма: Задать вопрос */
/* ********************** */

if (isset($_GET['question']))
{?>
	<?php

	if (isset($_POST['gp_name']) && isset($_POST['gp_email']) && isset($_POST['gp_message']))
	{
		$name = $_POST['gp_name'];
		$email = $_POST['gp_email'];
		$message = $_POST['gp_message'];
		$phone = isset($_POST['gp_phone']) ? $_POST['gp_phone'] : "не указан";
		if (trim($phone) == "+7" || trim($phone) == "")
			$phone = "не указан";

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Неверный E-Mail адрес!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		if (trim($name) == "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введено имя!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		if (trim($message) == "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введено сообщение!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		/* ========== */
		$content = "Вам отправлен вопрос с сайта проект-территории.рф.\n\nИмя: {$name}\nТелефон: {$phone}\nE-Mail: {$email}\nСообщение:\n\n{$message}\n\n\nСообщение сформировано автоматически.\n";
		$from_user = '=?UTF-8?B?'.base64_encode('проект-территории.рф').'?=';
		$subject = '=?UTF-8?B?'.base64_encode('Задан вопрос на сайте проект-территории.рф').'?=';

		$headers = 'From: '.$from_user.' <'.$noreply_email.'>' . "\r\n" .
		'Reply-To: ' . $noreply_email . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/plain; charset=utf-8' . "\r\n" .
		'Return-Path: ' . $noreply_email . ".\r\n";

		$params = "-f" . $noreply_email;

		mail($admin_email, $subject, $content, $headers, $params);
		send_sms_to_admin($sms_api_id, $sms_admin_phone);

		?>

		<div class="modal-wrap">
			<br /><br /><br />

			<h2>Сообщение успешно отправлено!</h2>

			<br /><br /><br />
		</div>

		<?
		return true;
	}

	?>
	<div class="modal-wrap">
		
		<h2>Задать вопрос</h2>

		<form class="question_form" name="question_form" id="question_form" action="/ajax.php?question" method="POST" onsubmit="return ajaxFormTry($(this));">
			<label>*</label><input name="gp_name" type="text" placeholder="Ваше имя" title="Ваше имя" required="">
			<br /><label>*</label><input name="gp_email" type="email" placeholder="Ваш E-Mail" title="Ваш E-Mail" required="">
			<br /><label>&nbsp;</label><input name="gp_phone" type="text" placeholder="Номер телефона" class="gp_phone" title="Номер телефона" maxlength="18" autocomplete="off">
			<br /><label>*</label><textarea name="gp_message" placeholder="Ваш вопрос/сообщение" title="Ваш вопрос/сообщение" required=""></textarea>
			<p class="privacy-form-info">Отправляя эту форму, вы принимаете нашу<br /><a href="/privacy/" target="_blank" class="privacy-link-form" title="Политика конфиденциальности">политику конфиденциальности</a>.</p>
			<input type="submit" name="submit_message" value="Отправить">
		</form>

	</div>

	<script>
	$(document).ready(function(){
		$('.gp_phone').mask('+0 (000) 000-00-00');
		$('.gp_phone').on('click', function() {
			if ( $('.gp_phone').val() == "" )
				$('.gp_phone').val('+7 ');
		});
	});
	</script>
<?}



/* ********************** */
/* Форма: Оставьте заявку - рассчитать стоимость */
/* ********************** */

elseif (isset($_GET['get_price'])) {

	if (isset($_POST['gp_email']) && isset($_POST['gp_square']) && isset($_POST['gp_type']) && isset($_POST['gp_phone']))
	{
		$email = $_POST['gp_email'];
		$ob_square = $_POST['gp_square'];
		$ob_type = $_POST['gp_type'];
		$phone = isset($_POST['gp_phone']) ? $_POST['gp_phone'] : "";

		if (trim($phone) === "+7" || trim($phone) === "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введен номер телефона!</h2>

				<br /><br /><br />
			</div>

			<?
			return false;
		}

		if (trim($ob_square) === "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введена площадь!</h2>

				<br /><br /><br />
			</div>

			<?
			return false;
		}

		if (trim($ob_type) === "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введен вид объекта!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Неверный E-Mail адрес!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		/* ========== */
		$content = "Заявка Рассчитать Стоимость с сайта проект-территории.рф.\n\nE-Mail: {$email}\nТелефон: {$phone}\nПлощадь: {$ob_square}\nВид объекта: {$ob_type}\n\nСообщение сформировано автоматически.\n";
		$from_user = '=?UTF-8?B?'.base64_encode('проект-территории.рф').'?=';
		$subject = '=?UTF-8?B?'.base64_encode('Заявка Рассчитать Стоимость с сайта проект-территории.рф').'?=';

		$headers = 'From: '.$from_user.' <' . $noreply_email . '>' . "\r\n" .
		'Reply-To: ' . $noreply_email . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/plain; charset=utf-8' . "\r\n" .
		'Return-Path: ' . $noreply_email . ".\r\n";

		$params = "-f" . $noreply_email;

		mail($admin_email, $subject, $content, $headers, $params);
		send_sms_to_admin($sms_api_id, $sms_admin_phone);

		?>

		<div class="modal-wrap">
			<br /><br /><br />

			<h2>Спасибо!</h2>
			<h3>Ваша заявка рассчитать стоимость объекта принята в обработку.</h3>

			<br /><br /><br />
		</div>

		<?
		return true;
	}


	?>
	<div class="modal-wrap">
		
		<h2>Рассчитать стоимость</h2>

		<form class="question_form" name="question_form" id="question_form" action="/ajax.php?get_price" method="POST" onsubmit="return ajaxFormTry($(this));">
			<label>*</label><input name="gp_type" type="text" placeholder="Вид объекта" title="Вид объекта" required="">
			<br /><label>*</label><input name="gp_square" type="text" placeholder="Площадь" title="Площадь" required="">
			<br /><label>*</label><input name="gp_email" type="email" placeholder="Ваш E-Mail" title="Ваш E-Mail" required="">
			<br /><label>*</label><input name="gp_phone" type="text" placeholder="Номер телефона" title="Номер телефона" class="gp_phone" required="">
			<p class="privacy-form-info">Отправляя эту форму, вы принимаете нашу<br /><a href="/privacy/" target="_blank" class="privacy-link-form" title="Политика конфиденциальности">политику конфиденциальности</a>.</p>
			<input type="submit" name="submit_message" value="Отправить">
		</form>

	</div>

	<script>
	$(document).ready(function(){
		$('.gp_phone').mask('+0 (000) 000-00-00');
		$('.gp_phone').on('click', function() {
			if ( $('.gp_phone').val() == "" )
				$('.gp_phone').val('+7 ');
		});
	});
	</script>
<?
}



/* ********************** */
/* Форма: Оставьте заявку - перезвонить вам */
/* ********************** */

elseif (isset($_GET['order_call'])) {

	if (isset($_POST['gp_name']) && isset($_POST['gp_phone']))
	{
		$name = $_POST['gp_name'];
		$phone = $_POST['gp_phone'];

		if (trim($name) == "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введено имя!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		if (trim($phone) == "+7" || trim($phone) == "")
		{?>
			<div class="modal-wrap">
				<br /><br /><br />

				<h2>Не введен номер телефона!</h2>

				<br /><br /><br />
			</div>
			
			<?
			return false;
		}

		/* ========== */
		$content = "Заявка перезвонить с сайта проект-территории.рф.\n\nИмя: {$name}\nТелефон: {$phone}\n\n\nСообщение сформировано автоматически.\n";
		$from_user = '=?UTF-8?B?'.base64_encode('проект-территории.рф').'?=';
		$subject = '=?UTF-8?B?'.base64_encode('Заявка перезвонить с сайта проект-территории.рф').'?=';

		$headers = 'From: '.$from_user.' <' . $noreply_email . '>' . "\r\n" .
		'Reply-To: ' . $noreply_email . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/plain; charset=utf-8' . "\r\n" .
		'Return-Path: ' . $noreply_email . ".\r\n";

		$params = "-f" . $noreply_email;

		mail($admin_email, $subject, $content, $headers, $params);
		send_sms_to_admin($sms_api_id, $sms_admin_phone);

		?>

		<div class="modal-wrap">
			<br /><br /><br />

			<h2>Спасибо!</h2>
			<h3>Ваша заявка принята в обработку.</h3>

			<br /><br /><br />
		</div>

		<?
		return true;
	}


	?>
	<div class="modal-wrap">
		
		<h2>Оставьте заявку</h2>

		<form class="question_form" name="question_form" id="question_form" action="/ajax.php?order_call" method="POST" onsubmit="return ajaxFormTry($(this));">
			<label>*</label><input name="gp_name" type="text" placeholder="Ваше имя" title="Ваше имя" required="">
			<br /><label>*</label><input name="gp_phone" type="text" placeholder="Номер телефона" class="gp_phone" title="Номер телефона" maxlength="18" autocomplete="off" required="">
			<p class="privacy-form-info">Отправляя эту форму, вы принимаете нашу<br /><a href="/privacy/" target="_blank" class="privacy-link-form" title="Политика конфиденциальности">политику конфиденциальности</a>.</p>
			<input type="submit" name="submit_message" value="Перезвонить Вам">
		</form>

	</div>

	<script>
	$(document).ready(function(){
		$('.gp_phone').mask('+0 (000) 000-00-00');
		$('.gp_phone').on('click', function() {
			if ( $('.gp_phone').val() == "" )
				$('.gp_phone').val('+7 ');
		});
	});
	</script>
<?
}
?>
