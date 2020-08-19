  
<?php

require_once "../controller/PaymentController.php";

$datos = array(

);


$objCargo = new Cargo();
$resp = $objCargo->crearCargoCodi($datos);

echo json_encode($resp["charge"]);

    /*
    $responseJson = new \stdClass();
    $responseJson->status = true;
    $responseJson->msg = "Pago con suceso";
    $responseJson->charge = "queso";

    $myJSON = json_encode($responseJson);

    var_dump($myJSON);
    echo $myJSON;
    */
?>
