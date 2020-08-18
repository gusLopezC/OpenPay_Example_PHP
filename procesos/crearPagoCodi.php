  
<?php

require_once "../controller/PaymentController.php";

$datos = array(

);


$objCargo = new Cargo();

$resp = $objCargo->crearCargoCodi($datos);
    echo json_encode($resp);
// $myJSON = json_encode($resp);
// echo $myJSON;
?>