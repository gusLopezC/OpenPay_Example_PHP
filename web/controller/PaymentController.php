<?php

//require_once "../../vendor/openpay/sdk/Openpay.php";
// require_once "../models/Charge.php";
require(dirname(__FILE__) . '/Openpay/Openpay.php');


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
			'amount' => 11,
			'description' => 'Laptop Dell Inspiron',
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
		} else {
			$status = array("status" => true, "charge" => json_encode($chargeData));
		}
		return $status;
	}


	public function crearCargoCodi()
	{
		/*
		$chargeMode  = array(
			'mode' => 'QR_CODE',

		);

		$customerData = array(
			'name' => 'User',
			'last_name' => 'Testing',
			'email' => 'Testing@payments.com',
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

		$chargeData  = array(
			'method' => 'codi',
			'amount' => 200.00,
			'description' => 'Cargo con código QR',
			// 'order_id' => 'codi-00051',
			'codi_options' => '',
			'due_date' => '2020-12-20T13:45:00',
			'codi_options' => $chargeMode,
			'customer' => $customerData
		);

		$charge = $this->openpay->charges->create($chargeData);
		*/
		
		$chargeData = array(
    		'amount' => 200.00,
    		'description' => 'Cargo con código QR Estático',
    		'due_date' => '2020-07-20T13:45:00'
    		);

		$charge = $this->openpay->charges->create($chargeData);
		

		$responseJson = new \stdClass();
		$responseJson->status = true;
		$responseJson->msg = "Pago con suceso";
		$responseJson->id = $charge->id;
		$responseJson->status = $charge->status;
		$responseJson->charge = $charge->payment_method;

		echo json_encode($responseJson);
	}
}
