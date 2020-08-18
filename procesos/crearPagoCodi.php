  
<?php

require_once "../controller/PaymentController.php";

$datos = array(

);


$objCargo = new Cargo();

 $responseJson = new \stdClass();
    $responseJson->status = true;
    $responseJson->msg = "Pago con suceso";
    $responseJson->charge = "queso";

    $myJSON = json_encode($responseJson);
    echo $myJSON;
?>
