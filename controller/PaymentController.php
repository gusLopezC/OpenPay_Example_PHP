<?php

require_once "../vendor/openpay/sdk/Openpay.php";

class Cargo
{
	private $openpay;

	public function __construct()
	{
		$this->openpay = Openpay::getInstance('mdrhnprmsmxkgxtegzhk', 'sk_c71babd865fd420b94bc588a8585c122');
	}

	public function crearCargo($datos)
	{

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
				'country_code' => 'MX'
			)
		);

		$chargeData = array(
			'method' => 'card',
			'source_id' => $datos[0],
			'amount' => 100,
			'description' => 'Cargo inicial a mi merchant',
			// 'order_id' => 'ORDEN-10072', //opcional
			'device_session_id'  => $datos[1],
			'customer' => $customerData
		);

		$charge = null;
		$errorMsg = null;
		$errorCode = null;

		try {
			$charge = $this->openpay->charges->create($chargeData);
		} catch (Exception $e) {
			$errorMsg = $e->getMessage();
			$errorCode =  $e->getCode();
		}

		$status = null;
		if ($errorMsg !== null || $errorCode !== null) {
			$errorMsg = $this->getError($errorCode);
			$status = array("status" => false, "error" => $errorMsg, "errorCode" => $errorCode);
		} else{
			$status = array("status" => true);
		}
	
		var_dump($status);
		return $status;
	}
}
