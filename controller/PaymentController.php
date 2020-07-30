<?php 

require_once "../vendor/openpay/sdk/Openpay.php";	

return  $_REQUEST["deviceIdHiddenFieldName"];
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
	'source_id' => 'krfkkmbvdk3hewatruem',
	'amount' => 100,
	'description' => 'Cargo inicial a mi merchant',
	'order_id' => 'ORDEN-00071',
	'device_session_id'  => 'kR1MiQhz2otdIuUlQkbEyitIqVMiI16f',
	'customer'=> $customerData);

$charge = $openpay->charges->create($chargeData);


?>