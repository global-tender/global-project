<?php

function send_sms_to_admin($sms_api_id, $sms_admin_phone) {
	$ch = curl_init("http://sms.ru/sms/send");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_POSTFIELDS, array(

		"api_id"		=>	$sms_api_id,
		"to"			=>	$sms_admin_phone,
		"text"		=>	iconv("windows-1251","utf-8","Событие+с+сайта+глобал-проект.рф,+проверьте+почту")

	));
	$body = curl_exec($ch);
	curl_close($ch);
}
?>