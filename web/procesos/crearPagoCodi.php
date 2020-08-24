  
<?php

require_once "../controller/PaymentController.php";

$datos = array();


$objCargo = new Cargo();
$resp = $objCargo->crearCargoCodi($datos);


echo $resp;

//echo $resp["charge"];

?>
