<?php

function send_sms_to_admin($sms_api_id, $sms_admin_phone) {

	$body=file_get_contents("http://sms.ru/sms/send?api_id=".$sms_api_id."&to=".$sms_admin_phone."&text=".urlencode("Событие с проект-территории.рф, проверьте почту"));
	return $body;
}
?>
