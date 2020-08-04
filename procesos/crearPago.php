  
<?php

echo json_encode(array('success' => 1));
/*
require_once "../controller/PaymentController.php";

$token_id = $_POST["token_id"];
$deviceIdHiddenFieldName = $_POST["deviceIdHiddenFieldName"];
// $token_id = $_POST["token_id"];

$datos = array(
    $token_id,
    $deviceIdHiddenFieldName
);


$objCargo = new Cargo();
$resp = $objCargo->crearCargo($datos);


if ($resp["status"] == true) {
    echo json_encode(array('success' => 1));

    /*
    $responseJson = new \stdClass();
    $responseJson->status = true;
    $responseJson->msg = "Pago con suceso";
    $responseJson->success = true;

    header('content-type: aplication/json');

    $myJSON = json_encode($responseJson);
    echo $myJSON;
    
} else {
    print_r($ret["error"]);
    print_r("La generación del pago falló");
    return;
}
/*
?>