<?php

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
		$content = "Вам отправлен вопрос с сайта глобал-проект.рф.\n\nИмя: {$name}\nТелефон: {$phone}\nE-Mail: {$email}\nСообщение:\n\n{$message}\n\n\nСообщение сформировано автоматически.\n";
		$from_user = '=?UTF-8?B?'.base64_encode('глобал-проект.рф').'?=';
		$subject = '=?UTF-8?B?'.base64_encode('Задан вопрос на сайте глобал-проект.рф').'?=';

		$headers = 'From: '.$from_user.' <info@ihptru.ptpgo.com>' . "\r\n" .
		'Reply-To: info@ihptru.ptpgo.com' . "\r\n" .
		'BCC: ihptru@gmail.com' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/plain; charset=utf-8' . "\r\n" .
		'Return-Path: info@ihptru.ptpgo.com.' . "\r\n";

		$params = "-finfo@ihptru.ptpgo.com";

		mail("global-proect@mail.ru", $subject, $content, $headers, $params);

		/* ========== */
		/* ========== */
		$content = "Копия вашего вопроса с сайта глобал-проект.рф.\n\nСообщение доставлено, ожидайте ответа.\n\nИмя: {$name}\nТелефон: {$phone}\nE-Mail: {$email}\nСообщение:\n\n{$message}\n\n\nСообщение сформировано автоматически.\n";
		$from_user = '=?UTF-8?B?'.base64_encode('глобал-проект.рф').'?=';
		$subject = '=?UTF-8?B?'.base64_encode('Копия: Задан вопрос на сайте глобал-проект.рф').'?=';

		$headers = 'From: '.$from_user.' <info@ihptru.ptpgo.com>' . "\r\n" .
		'Reply-To: info@ihptru.ptpgo.com' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/plain; charset=utf-8' . "\r\n" .
		'Return-Path: info@ihptru.ptpgo.com' . "\r\n";

		$params = "-finfo@ihptru.ptpgo.com";

		mail($email, $subject, $content, $headers, $params);
		/* ========== */

		?>

		<div class="modal-wrap">
			<br /><br /><br />

			<h2>Сообщение успешно отправлено!</h2>
			<h3>Вам также направлена копия.</h3>

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
			<br /><input type="submit" name="submit_message" value="Отправить">
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
		$content = "Заявка перезвонить с сайта глобал-проект.рф.\n\nИмя: {$name}\nТелефон: {$phone}\n\n\nСообщение сформировано автоматически.\n";
		$from_user = '=?UTF-8?B?'.base64_encode('глобал-проект.рф').'?=';
		$subject = '=?UTF-8?B?'.base64_encode('Заявка перезвонить с сайта глобал-проект.рф').'?=';

		$headers = 'From: '.$from_user.' <info@ihptru.ptpgo.com>' . "\r\n" .
		'Reply-To: info@ihptru.ptpgo.com' . "\r\n" .
		'BCC: ihptru@gmail.com' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/plain; charset=utf-8' . "\r\n" .
		'Return-Path: info@ihptru.ptpgo.com.' . "\r\n";

		$params = "-finfo@ihptru.ptpgo.com";

		mail("global-proect@mail.ru", $subject, $content, $headers, $params);

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
			<br /><input type="submit" name="submit_message" value="Перезвонить Вам">
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
