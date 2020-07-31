<?php 

require_once "../vendor/openpay/sdk/Openpay.php";	

$openpay = Openpay::getInstance('mdrhnprmsmxkgxtegzhk', 'sk_c71babd865fd420b94bc588a8585c122');

$customerData = array(
	'name' => 'Teofilo',
	'last_name' => 'Velazco',
	'email' => 'teofilo@payments.com',
	'phone_number' => '4421112233',
	'address' => array(
			'line1' => 'Privada Rio No. 12',
			'line2' => 'Co. El Tintero',
			'line3' => '',
			'postal_code' => '76920',
			'state' => 'Querétaro',
			'city' => 'Querétaro.',
			'country_code' => 'MX'));

$chargeData = array(
	'method' => 'card',
	'source_id' => $_POST["token_id"],
	'amount' => 100,
	'description' => 'Cargo inicial a mi merchant',
	// 'order_id' => 'ORDEN-10072', //opcional
	'device_session_id'  => $_POST["deviceIdHiddenFieldName"],
	'customer'=> $customerData);

 $charge = $openpay->charges->create($chargeData);

 echo $charge;
?>